

app.controller("myCtrl", function($scope,$http) {
    $scope.title="Contacts App";
   $scope.recordsArray={};
   $scope.contactsArray=[];
   

    $http.get("http://127.0.0.1:8000/user/1")
       .then(function(response) {

        var data= response.data;
        console.log(data);
        $scope.contactsArray = data;
    });

    $scope.AddContacts=function(){

    	$scope.recordsArray.type='add';
    	$scope.modalTitle='Provide Details';
 			$("#myModal").modal({ }); 
    }

	 $scope.save =function(){
	 	if($scope.recordsArray.type == 'add'){
		$scope.contactsArray.push($scope.recordsArray);
		console.log($scope.contactsArray);
		
		$scope.recordsArray={}

			$('#myModal').find("input,textarea,select").val('').end();

		}else{
			$scope.updateInArray($scope.recordsArray);
		}
	}

	$scope.remove = function(item) { 
  		  var index = $scope.contactsArray.indexOf(item);

  		    $scope.contactsArray.splice(index, 1);     
		}

    $scope.update= function(item){

    	 var index = $scope.contactsArray.indexOf(item);
    	
    	$scope.modalTitle='Update Details';

    	$scope.recordsArray.name=item.name;
    	$scope.recordsArray.address= item.address;
    	$scope.recordsArray.number= item.number;
    	$scope.recordsArray.type='edit';
    	$scope.recordsArray.id=index;
    	
    	$("#myModal").modal({ }); 
    	 
    	 
   		
    }

    $scope.updateInArray=function(data){
    	
    	
    	$scope.contactsArray[data.id]=data;
    	$scope.recordsArray={}
    	
    	$('#myModal').find("input,textarea,select").val('').end();
    }

    

});


