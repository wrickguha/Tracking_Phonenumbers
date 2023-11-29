import phonenumbers
from phonenumbers import geocoder

import folium

Key='abf57c61a7344eba91c9011d85ba989d'

number = input("Enter the number with country code: ")

try:
    check_number = phonenumbers.parse(number)
    number_location = geocoder.description_for_number(check_number, "en")
    print("Location: " + number_location)
except phonenumbers.phonenumberutil.NumberFormatError:
    print("Invalid phone number format. Please enter a valid phone number.")


from phonenumbers import carrier
service_provider= phonenumbers.parse(number)
carrier_name = carrier.name_for_number(service_provider,"en")
print(carrier_name)

from opencage.geocoder import OpenCageGeocode
geocoder = OpenCageGeocode(Key)

query = str(number_location)
results=geocoder.geocode(query)


lat = results[0]['geometry']['lat']
lng = results[0]['geometry']['lng']
print(lat,lng)

map_location = folium.Map(location = [lat,lng], zoom_start=9 )
folium.Marker([lat,lng],popup=number_location).add_to(map_location)
map_location.save("mylocation.html")
