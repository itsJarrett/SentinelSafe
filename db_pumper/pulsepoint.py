import random
import time
import requests
import googlemaps
import db_pumper.utils
from datetime import datetime
from pytz import timezone

gmaps = googlemaps.Client(key=db_pumper.utils.googleMapsAPI)

def random_headers():
    return {'User-Agent': utils.userAgent,
            'Accept': 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8'}

while True:
    jsonReturn = grab_pulsepoint(agencyTableu=true)
    for incident in jsonReturn['incidents']:
        incidentId = incident['ID']
        incidentAgency = "Long Beach Fire Department"
        incidentAddress = str.replace(gmaps.reverse_geocode((incident['Latitude'], incident['Longitude']))[1]['formatted_address'], ", USA", "")
        incidentNumber = incident['IncidentNumber']
        incidentType = next(
            fullname for (name, fullname) in db_pumper.utils.call_types if name == incident['PulsePointIncidentCallType'])
        dispatchTime = datetime.strptime(incident['CallReceivedDateTime'][:-1], "%Y-%m-%dT%H:%M:%S").replace(tzinfo=timezone("UTC")).astimezone(timezone("US/Pacific")).strftime(
            "%Y-%m-%d %H:%M:%S")
        db_pumper.utils.incidentCursor.execute("INSERT INTO fire (id, agency, incidentNumber, address, incidentType, dispatchTime) VALUES (%s, %s, %s, %s, %s, %s) ON DUPLICATE KEY UPDATE id=id, agency=agency, incidentNumber=incidentNumber, address=address, incidentType=incidentType, dispatchTime=dispatchTime", (incidentId, incidentAgency, incidentNumber, incidentAddress, incidentType, dispatchTime))
        print(incident)
    db_pumper.utils.incidentdb.commit()
    time.sleep(60)
