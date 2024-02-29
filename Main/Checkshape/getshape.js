class MyClass {
    constructor() {
      this.shape = "0";
    }
  
    getShape(shoulder, bust, waist, hip) {
      // code for the method body 
  
      if (shoulder >= (bust * 0.95) && shoulder <= (bust * 1.05)) {
        if (hip >= (bust * 0.95) && hip <= (bust * 1.05)) {
          if (bust - waist <= 0.26 * bust && bust - waist >= 0.24 * bust) {
            console.log();
            this.shape = "Rectangle";
          }
        }
      }
  
      console.log("shoulder: " + shoulder + " bust: " + bust + " waist: " + waist + " hip: " + hip);
  
      return this.shape;
    }
  }

function calculateShape() {
    const shoulder = document.getElementById('shoulder').value;
    const bust = document.getElementById('bust').value;
    const waist = document.getElementById('waist').value;
    const hip = document.getElementById('hip').value;
  
    const instance = new MyClass();
    const result = instance.getShape(parseInt(shoulder), parseInt(bust), parseInt(waist), parseInt(hip));
    console.log(result);
    // Display the result in the HTML file
  }
  
  // Testing the class
  //const instance = new MyClass();
  //const result = instance.getShape(31, 32, 24, 33);
  //console.log(result);
  