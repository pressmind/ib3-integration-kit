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

## Header and Footer Template Integration
To integrate a custom header and footer resource into the IBE layout, a public accessible html file with the desired contents must be available. 
This file has to contain the following Placeholder for the IBE to be injected:

```php
###PRESSMIND_IBE_HEADER_CSS###
###PRESSMIND_IBE_HEADER_SCRIPTS###
###PRESSMIND_IBE_CONTENT###
###PRESSMIND_IBE_FOOTER_SCRIPTS###
```

In the example_files folder in this repo you can find the file layout_example.html to use it as a starting point for your custom integration file. 

### Please make sure that all images and included stylesheets/javascript resources in your custom layout are delivered via https and that an Access-Control-Allow-Origin header is sent for these resources.
