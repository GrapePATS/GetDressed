function getShape(shoulder, bust, waist, hip) {
  // code for the method body
  if (isNaN(shoulder) || isNaN(bust) || isNaN(waist) || isNaN(hip)) {
    return "Invalid input. Please enter valid numbers.";
  }

  var shape = "Shape##";

  if (shoulder >= (bust * 0.95) && shoulder <= (bust * 1.05)) {
    if (hip >= (bust * 0.95) && hip <= (bust * 1.05)) {
      if (bust - waist <= 0.26 * bust && bust - waist >= 0.24 * bust) {
        shape = "rectangle";
      }
    }
  }

  console.log("shoulder: " + shoulder + " bust: " + bust + " waist: " + waist + " hip: " + hip);

  return shape;
}

function calculateShape() {
  const shoulder = document.getElementById("shoulder").value;
  const bust = document.getElementById("bust").value;
  const waist = document.getElementById("waist").value;
  const hip = document.getElementById("hip").value;
  const result = getShape(parseInt(shoulder), parseInt(bust), parseInt(waist), parseInt(hip));
  console.log(result);

  // Assuming you want to display the result on the page
  window.location.href = result + ".html";

  /*
  // Create a new XMLHttpRequest object
  const xhr = new XMLHttpRequest();

  // Specify the PHP script URL
  const url = 'testja.php';

  // Set the request method to POST
  xhr.open('POST', url, true);

  // Set the request header to specify the content type
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  // Define a function to handle the response from the PHP script
  xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
              // Request was successful, you can handle the response here
              console.log(xhr.responseText);
          } else {
              // Request failed
              console.error('Error: ' + xhr.status);
          }
      }
  };

  // Construct the data to be sent
  const data = 'shoulder=' + encodeURIComponent(shoulder) +
             '&bust=' + encodeURIComponent(bust) +
             '&waist=' + encodeURIComponent(waist) +
             '&hip=' + encodeURIComponent(hip) +
             '&result=' + encodeURIComponent(result);
  
  // Send the request with the data
  xhr.send(data);*/

}
