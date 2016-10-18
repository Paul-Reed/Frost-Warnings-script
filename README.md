Frost-Warnings-script
=====================
As a keen gardener, I want to be notified about overnight frosts to enable me to cover over tender plants & limit damage, especially in spring when there is new tender growth, so I've just modded a little script which sends a push message to my phone at midday, if the nightime temperature is predicted to fall below 3 degC.
A cron job runs the script each midday, which obtains a JSON weather data string from Wunderground.com via their API and from which the predicted overnight temperature is parsed. If this is below 3 degC, then Curl is used to call the Boxcar script as described http://openenergymonitor.org/emon/node/2443

The script can easily be changed to get other weather data, such as if wind gusts exceed certain speed, rainfall per hour more than... etc.
Edit 1
Edit 2
Edit 3
