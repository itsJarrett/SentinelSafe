import time

import db_pumper.utils
from twilio.rest import Client

client = Client(db_pumper.utils.twilioSID, db_pumper.utils.twilioAPI)


def comparison():
    db_pumper.utils.incidentCursor.execute("SELECT * FROM fire WHERE notified = FALSE")
    incidents = db_pumper.utils.incidentCursor.fetchall()

    for incident in incidents:
        address = incident[3]
        db_pumper.utils.websiteCursor.execute("SELECT * FROM users WHERE address LIKE %s", (address,))
        userMatches = db_pumper.utils.websiteCursor.fetchall()
        for user in userMatches:
            body = "Hello " + user[3] + ", there is currently a " + incident[4] + " at " + incident[3] + " the " \
                   + incident[1] + " is currently en-route. The time of dispatch was " + str(incident[5]) + "."
            message = client.messages \
                .create(
                body=body,/
                to=user[6]
            )
            print(message.to)
            print(body)
        db_pumper.utils.incidentCursor.execute("UPDATE fire SET notified = TRUE WHERE id = %s", (incident[0],))
        db_pumper.utils.incidentdb.commit()


while True:
    comparison()
    time.sleep(10)
