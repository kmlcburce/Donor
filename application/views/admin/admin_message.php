<body>
 <head>
   <title>Message Board</title>
   <style type="text/css">
      /* Chat containers */
.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

/* Darker chat container */
.darker {
  border-color: #ccc;
  background-color: #ddd;
}

/* Clear floats */
.container::after {
  content: "";
  clear: both;
  display: table;
}

/* Style images */
.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

/* Style the right image */
.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

/* Style time text */
.time-right {
  float: right;
  color: #aaa;
}

/* Style time text */
.time-left {
  float: left;
  color: #999;
} 
   </style>
 </head>
<body>
  

  <div id="id01" class="w3-modal" >
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;
      </span>
        
      </header>
        
        <form class="add_prod" method="post" action="<?php echo base_url()?>main/add_message_validation">
                     
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Compose Message</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          
                        </div>
                        <div class="modal-body"> 
                      <?php
                        if ($this->uri->segment(2)=="added_prod") {
                            echo '<p class="text-success">Message Sent</p>';
                          }  
                        ?>
                      <div class="input-group-icon mt-10">
                        <div class="icon">
                          
                        </div>
                        <input type="text" name="m_to" placeholder="To" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message to'"required class="form-control">
                        <input type="text" name="m_from" placeholder="From" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message from'"required class="form-control">
                        <input type="text" name="m_subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'"required class="form-control">
                        <textarea rows="5" cols="55">
                          
                        </textarea>
                         <span class="text-danger"><?php echo form_error("address");?></span>

                        </div>
                      
                      <input type="submit" name="ap_sub" value="Send">
                     </form>
      
      </div>
      <footer class="w3-container w3-teal">
        
      </footer>
    </div>

 <?php 

                      if($get_message->num_rows() >0) 
                      { 
                        foreach ($get_message->result() as $row) {
                          
                          ?>
<button onclick="document.getElementById('id01').style.display='block'" class="btn btn-info btn-l">Compose Message</button>
 <div class="container">
  <h4>To: <?php echo $row->m_to; ?></h4>
  <h4>From: <?php echo $row->m_from; ?></h4>
  <h4>Subject: <?php echo $row->m_subject; ?></h4>
  <p>Message: <?php echo $row->m_message; ?></p>
  <span class="time-right"><h3><?php echo $row->m_time; ?></h3></span>
</div>

<?php 
                        }
                      }
                      else{
                        ?>
                        <tr>
                          <td colspan="5">No Data Found</td>
                        </tr>
                        <?php
                      }
                      ?>
</body>