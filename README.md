# Sentinel Safe

## Inspiration

When Emergency Medical / Fire Services are dispatched to your house, you are often the LAST person to find out. Whether a fire is burning, or a loved one has been injured, there is a lot of time between getting notified about such events.

## What it does

Sentinel Safe scrapes publicly available Emergency Service data and stores it in our runtime. When users sign-up for our website, we take note of their address and phone number. When Emergency Services are dispatched, we cycle our DB and runtime to check address distances. If the address is the user's address or a neighbor's, we will notify the user via text about what is occurring. We send them the address and call type.

## How we built it

Python, Google Maps API, CakePHP, Doctrine, and MySQL

## Challenges We ran into

Scraping the data and formulating it in such a manner that can be compared to the address's our users provide. We wanted to quickly compare distances; it can be very processed consuming, but with the use of Google's Google Maps API, we are very easily able to get the distances between addresses.

## Accomplishments that we're proud of

We believe we are the only people to create such a product. Our product is in the business of keeping our users informed. We believe that if utilized effectively and widely, we can actually save lives since our system notifies our users once the units are dispatched BEFORE Emergency Services are on scene.

## What we learned

It was our first time utilizing the PHP Framework and working with Google's APIs for our SQL server, and Google Maps.
