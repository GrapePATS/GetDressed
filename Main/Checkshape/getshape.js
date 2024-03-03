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

  // Send the result data to the PHP file as a form field
  const formData = new FormData();
  formData.append('result', result);
  formData.append('shoulder', shoulder);
  formData.append('bust', bust);
  formData.append('waist', waist);
  formData.append('hip', hip);

  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'testja.php', true);
  xhr.send(formData);


  // Assuming you want to display the result on the page
  window.location.href = result + ".html";
  
  
  /* // Create an XMLHttpRequest object
  const xhr = new XMLHttpRequest();

  // Set the URL of the PHP file to send the request to
  const url = 'testja.php';

  // Set the method to POST
  xhr.open('POST', url, true);

  // Set the responseType to JSON
  xhr.responseType = 'json';

  // Set the headers for the request
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  // Define a callback function to handle the response
  xhr.onload = function() {
    if (xhr.status === 200) {
      console.log('Response received:', xhr.response);
      // Handle the response data here
    } else {
      console.log('Error:', xhr.statusText);
    }
  };

  // Send the request with the result data as a parameter
  xhr.send('result=' + encodeURIComponent(result));*/

}
