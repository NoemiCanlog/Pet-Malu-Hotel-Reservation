
<html>
<link rel="stylesheet" type="text/css" href="./styles/reserve.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="./scripts/reserve.js"></script>
<script>
        function finalCost(){
            var roomType = document.getElementById("room_type").value;
            var roomNum = document.getElementById("room_number").value;
            var personNum = document.getElementById("person_number").value;
            var childNum = document.getElementById("child_number").value;
            

            var total = (parseInt(roomType)*10) + ((roomNum)*2) + ((personNum)*3) + ((childNum)*2) + ((resFacilities)*5)

            document.getElementById("result").innerHTML = total;
        }
    </script>

  <body>
    <div class="diamond"></div>
    <div class="form-wrap">
      <h2 class="mob">Hotel Booking Form</h2>
      <h3 class="mob">Mobile Version</h3>
      <h5 class="mob">view on a desktop for the full experience</h5>
      <form action="">

        <div class="location">
          <label for="location">LOCATION</label><br/>
          <input type="text" name="location" placeholder="Davao City Philippines"/><br/>
        </div>

        <div class="form-group">
                 <label>Room/Suite Type</label>
                 <select class="form-control" id="room_type" onchange="finalCost()">
                     <option value="0" selected>Select Room/Suite </option>
                     <option value="1"> Superior </option>
                     <option value="2"> Deluxe </option>
                     <option value="3"> Standard double room </option>
                     <option value="4"> Standard Single room  </option>
                 </select>
             </div>


             <div class="form-group">
                 <label>Number of room/suite</label>
                 <select class="form-control" id="room_number" onchange="finalCost()">
                     <option value="0">  0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>

             <div class="form-group">
                 <label>Number of persons</label>
                 <select class="form-control" id="person_number" onchange="finalCost()">
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>
             <div class="form-group">
                 <label>Number of children</label>
                 <select class="form-control" id="child_number" onchange="finalCost()">
                     <option value="0"> 0 </option>
                     <option value="1"> 1 </option>
                     <option value="2"> 2 </option>
                     <option value="3"> 3 </option>
                     <option value="4"> 4 </option>
                     <option value="5"> 5 </option>
                     <option value="6"> 6 </option>
                     <option value="7"> 7 </option>
                 </select>
             </div>

        <div class="dates">
          <div class="arrival">
            <label for="arrival">ARRIVAL</label><br/>
            <input name="arrival" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="10/03/2016"/>
          </div>
          <div class="departure">
            <label for="arrival">DEPARTURE</label><br/>
            <input name="departure" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="05/11/2016"/>
          </div>
        </div>
      </form>
      <button class="btn" type="button">BOOK NOW</button>
      <div class="linkbox">
        <div class="links">
          <div class="origin">
       
          </div>
          <div class="me">

            
            
          </div>
        </div>
      </div>
    </div>
  </body>
</html>