<section>
<h1><?php echo $judul ?></h1>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Input ticket number here ..." name="search">
      <br><br><button type="submit">Go</button><br><br><br>
    </form>
  </div>
  </script>
  <style>
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>

<div class="container">
  <form action="<?php echo base_url(). 'crud/form_tambah'; ?>" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="No. Ticket">No. Ticket:</label>
      </div>
      <div class="col-25">
        <input type="text" value="<?php
          foreach($form as $f){
            echo $f->noticket;
        }?>" readonly>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="from">From</label>
      </div>
      <div class="col-25">
        <input type="text" value="<?php
          foreach($form as $f){
            echo $f->dari;
          }?>" readonly>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="to">To</label>
      </div>
      <div class="col-25">
        <input type="text" value="<?php
          foreach($form as $f){
            echo $f->untuk;
          }?>" readonly>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="date">Date</label>
      </div>
      <div class="col-25">
        <input type="text" value="<?php
          foreach($form as $f){
            echo $f->date;
          }?>" readonly>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="case">Case</label>
      </div>
      <div class="col-25">
        <input type="text" value="<?php
          foreach($form as $f){
            echo $f->kasus;
          }?>" readonly>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="duty">Duty</label>
      </div>
      <div class="col-25">
        <input type="text" value="<?php
          foreach($form as $f){
            echo $f->duty;
          }?>" readonly>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="dec">Date of Expected Completion</label>
      </div>
      <div class="col-25">
        <input type="text" value="<?php
          foreach($form as $f){
            echo $f->dateoec;
          }?>" readonly>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="si">System Integrated</label>
      </div>
      <div class="col-25">
       <input type="text" value="<?php
          foreach($form as $f){
            echo $f->systemint;
          }?>" readonly>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="urgency">Urgency</label>
      </div>
      <div class="col-25">
          <input type="text" value="<?php
          foreach($form as $f){
            echo $f->urgency;
          }?>" readonly>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="description">Description</label>
      </div>
      <div class="col-25">
        <input type="text" value="<?php
          foreach($form as $f){
            echo $f->description;
          }?>" readonly>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Approval Status">Approval Status</label>
      </div>
      <div class="col-25">
        <input type="text" value="<?php
          foreach($form as $f){
            echo $f->approvalstatus;
          }?>" readonly>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Status">Status</label>
      </div>
      <div class="col-25">
        <select id="status" name="status">
          <option value= <?php 
                          foreach ($form as $f) {
                            echo "<tr>";
            echo "<td>". $f->process."</td>";}?>>
          <option value="On Process">On Process</option>
          <option value="Done">Done</option>
        </select>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</section>