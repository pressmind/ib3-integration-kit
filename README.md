# Pressmind IB3 Integration Kit
## Building a hyperlink to book via the IBE

To build a link you need to provide the following get parameters:

* imo (id of media object)
* idbp (id of booking package)
* idd (id of travelling date)
* idhp (id of housing package)
* iho[]=1 (array of ids for housing options with quantifier)

EXAMPLE:  
https://my_company.pressmind-ibe.net/?imo=1234&idbp=5678&idd=9876&idhp=4321&iho[123]=1&iho[456]=2  
Will load the checkout page for the media object 1234 and display 2 housing options (e.g. rooms) one of id 123 and two of id 456 which belong to the date with id 9876.
