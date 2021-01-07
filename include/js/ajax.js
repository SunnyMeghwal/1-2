 abc = document.getElementById('current1')
let fetchData = document.getElementById("fetchData");

fetchData.addEventListener("click", buttonHandeler);


function buttonHandeler() {
 
  const xhr = new XMLHttpRequest();

  xhr.open("GET", "dashBoard.php", true);

  xhr.onprogress = function () 
  {
     h1 = document.getElementById("result");
     h1.innerHTML = '<div class="spinner-border" role="status"><span class="sr-only"></span></div>'; 
  }

  xhr.onload = function () {
    if (this.status === 200) {
       h1.innerHTML = this.responseText; 
      console.log(this.responseText)
    } else {
     console.log('data fetching error')
    }
  };
  xhr.send();

}
