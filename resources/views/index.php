
<!DOCTYPE html >
	<html lang="en-US" ng-app="contactsApp" >
		<title> User Form </title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
    <!-- AngularJS Application Scripts -->
        <script src="<?= asset('app/app.js') ?>"></script> <!-- my modular file -->
        <script src="<?= asset('app/controllers/controller.js') ?>"></script><!-- my controller file -->
		

		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		

  <body  ng-controller="myCtrl">
	
	<div class="container">
	 <div class="jumbotron" style="margin-top: 10px;background: url('https://www.walldevil.com/wallpapers/a70/3751-wallpapers-abstract-hqcyber-gallery.jpg');">
	  <h2 style="color:#ebfdfd;"><img src="https://vignette1.wikia.nocookie.net/logopedia/images/1/16/Ios-contacts.png/revision/latest?cb=20130928140948" style="width: 50px;margin-right: 10px;">
  		{{title}}</h2>
  	 </div>
  		<!-- Trigger the modal with a button -->
  		<button type="button" class="btn btn-info btn-lg " ng-click="AddContacts()">Add More Contacts</button>

  	<!-- Modal -->
  		<div class="modal fade" id="myModal" role="dialog">
    		<div class="modal-dialog">
    
     		 <!-- Modal content-->
      		<div class="modal-content">
       		 <div class="modal-header">
       		   <input type="text" style="display:none" class="form-control" id="type" ng-model="recordsArray.type">
         		 <button type="button" class="close" data-dismiss="modal">close</button>
          	  <h4 class="modal-title">{{modalTitle}}:</h4>
        	 </div>

        	 <form >
        		<div class="modal-body">
          		          			
          			<div class="form-group">
    					<label for="name" >Name:</label>
    					<input type="text" class="form-control" id="name" ng-model="recordsArray.name">
  					</div>
  					<div class="form-group">
  						<label for="gender" style="margin-right: 10px;" >Gender: </label>
						<input type="radio" ng-model="recordsArray.gender" value="male" style="margin-right: 5px;">Male
						<input type="radio" ng-model="recordsArray.gender" value="female" style="margin-left: 10px;margin-right: 5px;">Female
					</div>
  					<div class="form-group">
   					    <label for="number">Mobile Number:</label>
    					<input type="number" class="form-control" id="number" ng-model="recordsArray.number">
  					</div>
  					<div class="form-group">
   					    <label for="Address">Address:</label>
    					<textarea class="form-control" id="address" ng-model="recordsArray.address" rows="5"></textarea>
  					</div>
          		
        	</div>
        	   <div class="modal-footer">
         		 <button type="submit" id="submit" class="btn btn-success" data-dismiss="modal" ng-click="save()">Submit</button>
        		</div>
        	</form>
      </div>
      
    </div>
  </div>
<br/>
<br/>
	
  <div ng-if="contactsArray.length > 0"> 
	<h3>Your Contacts List:</h3>
	<table style="margin-right: 50px;margin-bottom: 13px;float: right;">
		<tr>
            <td align="right"><h4>Search by name:</h4></td>
            <td><input class="form-control" style="margin-left: 10px;" ng-model='searchText.name' /></td>
        </tr>  
    </table>
    <br/>
    <table class="table table-striped table-bordered table-hover" >
  		<th class="col-md-1">Sr. No.</th>
  		<th>Name</th>
  		<th>Number</th>
  		<th class="col-md-1">Gender</th>
  		<th>Address</th>
  		<th class="col-md-3">Actions</th>
  			<tr ng-repeat="x in contactsArray | filter:searchText">
  				<td align="center" class="col-md-1"> {{$index + 1}}</td>
    			<td>{{ x.name }}</td>
    			<td>{{ x.number }}</td>
    			<td class="col-md-1">{{ x.gender }}</td>
     			<td>{{ x.address }}</td>
     	<td class="col-md-3"><button type="button" class="btn btn-danger" ng-click="remove(x)">Delete</button>
  		<button type="button" class="btn btn-info" id="edit" ng-click="update(x)" >Edit</button></td>
  		</tr>
	 </table>

	</div>
	<div ng-if="contactsArray.length == 0">
		<h4>You need to add Contacts to get it displayed!! &#x260E; </h4>
	</div>
   

   </div><!-- Container class closes -->

  </body>
	


</html>



