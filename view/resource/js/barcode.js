// Here is where the barcode script code is located


// Example of fetch data to the server /api/?barcode=1234567890123
// and get the response in json format
// The barcode is sent as a parameter to the server
// The server will return the data in json format
fetch('/api/?barcode=1234567890123')
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error(error));