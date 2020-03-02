app.controller('scaffHome', ['$scope', '$http', function ($scope, $http) {
    
    //Checking User Credentials
    $http({
        method: 'get',
        url: 'Scaffolding/getUserData.php'
       }).then(function successCallback(response) {
        $scope.$applyAsync(function () {
            $scope.user = response.data;
            console.log($scope.user);
            if($scope.user.RL!="CONTRACTOR")
            location.href = '../login.html' ;
        });    
    });
    
    //Initializing for WorkOrder Table-Sort
    $scope.sortType = 'Serial';
    $scope.sortReverse = false;
    $scope.searchsearch = '';
    
    //Getting WorkOrders from Database
    $http({
     method: 'get',
     url: 'Scaffolding/getWorkOrderData.php'
    }).then(function successCallback(response) {
     $scope.records = response.data;
     console.log($scope.records);
    });

    //Checking availability of WorkOrder No.
    $scope.CheckWorkOrderNo = function(){
        const exists = $scope.records.some(newdata => newdata.NotificationNo == $scope.newWorkOrder.WorkOrderNo);
        var element = document.getElementById("WorkOrderNo");

        var classes = element.className.split(" ");
        var i = classes.indexOf("is-valid");
        var j = classes.indexOf("is-invalid");

        if($scope.newWorkOrder.WorkOrderNo == null)
        {
            if (i >= 0)
                classes.splice(i, 1,);
            if (j >= 0)
                classes.splice(j, 1,);         
        }
        else
        {
            if(!exists){
                if (i < 0)
                {
                    if (j >= 0)
                        classes.splice(j, 1, "is-valid"); 
                    else    
                        classes.splice(-1, 0,  "is-valid");            
                }    
            }
            else {
                if (j < 0)
                {
                    if (i >= 0)
                        classes.splice(i, 1, "is-invalid");
                    else     
                        classes.splice(-1, 0,  "is-invalid");      
                }    
            }
        }
        element.className = classes.join(" ");                    
    };

}]);

//Controller for "PENDING ESTIMATION" page
app.controller('scaffPendingEstimates', ['$scope', '$http', '$routeParams' , function ($scope, $http, $routeParams) {
    
    //Checking User Credentials
    $http({
        method: 'get',
        url: 'Scaffolding/getUserData.php'
       }).then(function successCallback(response) {
        $scope.$applyAsync(function () {
            $scope.user = response.data;
            console.log($scope.user);
            if($scope.user.RL!="CONTRACTOR")
            location.href = '../login.html' ;
        });    
    });
    
    //Initializing
    $scope.sortType = 'Serial';
    $scope.sortReverse = false;
    $scope.searchsearch = '';
    $scope.taskView = {};
    $scope.thisForm = {};
    $scope.page = {};
    $scope.thisForm.TaskSelected = 0 ; 
    $scope.taskView.comment = "" ;
    $scope.page.status = $routeParams.page ;


    //Getting WorkOrders from Database
    $http({
     method: 'get',
     url: 'Scaffolding/getTaskData.php'
    }).then(function successCallback(response) {
     $scope.records = response.data;
     console.log($scope.records);
    });

    //Making rows Clickable
    $('#myTable').on('click', '.clickable-row', function(event) {
        $(this).addClass('active').siblings().removeClass('active');
    });

    $scope.clickTable = function(x) {
            $scope.thisForm.TaskSelected = 1 ;
            $scope.taskView.TASK_ID = x.TASK_ID ;
            $scope.taskView.WO = x.WO ;
            $scope.taskView.ERE_DATE = x.ERE_DATE ;
            $scope.taskView.OFF_DATE = x.OFF_DATE ;
            $scope.taskView.DIS_DATE = x.DIS_DATE ;
            $scope.taskView.ERE_AMT_TOTAL = x.ERE_AMT_TOTAL ;
            $scope.taskView.HIRE_AMT_TOTAL = x.HIRE_AMT_TOTAL ;
            $scope.taskView.DIS_AMT_TOTAL = x.DIS_AMT_TOTAL ;
            $scope.taskView.TOTAL_AMT = x.TOTAL_AMT ;
        
    }

    //Clearing comment textbox after canceling
    $('#submitModal').on('hidden.bs.modal', function () {
        document.getElementById('comment').value = "" ;
    });
}]);



//Controller for ADD-ESTIMATION page
app.controller('scaffEstimate', ['$scope', '$http', '$routeParams' , function ($scope, $http, $routeParams) {

    //Checking User Credentials
    $http({
        method: 'get',
        url: 'Scaffolding/getUserData.php'
       }).then(function successCallback(response) {
        $scope.$applyAsync(function () {
            $scope.user = response.data;
            console.log($scope.user);
            if($scope.user.RL!="CONTRACTOR"&&$scope.user.RL!="QS")
            location.href = '../login.html' ;
        });    
    });

    $scope.newEstimate = {};
    $scope.Estimated = {};
    $scope.thisForm = {} ;
    $scope.newEstimate.WO = $routeParams.WorkOrderNo ;
    $scope.thisForm.TASK_ID = $routeParams.TASK_ID ;
    $scope.thisForm.IsEditMode = 0 ;
    console.log($scope.Estimated.TASK_ID) ;
    
    if($scope.thisForm.TASK_ID)
    {
        $http({
            method: 'get',
            url: 'Scaffolding/getTaskData.php?Task_ID=' + $scope.thisForm.TASK_ID
        }).then(function successCallback(response) {
            $scope.$applyAsync(function () {
                $scope.Estimated = response.data;
                $scope.newEstimate = JSON.parse(JSON.stringify($scope.Estimated[0]));
                console.log($scope.Estimated);
                $scope.calculateEstimation();
                var inputs = document.getElementsByTagName("INPUT");
                for (var i = 0; i < inputs.length; i++) inputs[i].disabled = true;
                var inputs = document.getElementsByTagName("SELECT");
                for (var i = 0; i < inputs.length; i++) inputs[i].disabled = true;
                var inputs = document.getElementsByTagName("TEXTAREA");
                for (var i = 0; i < inputs.length; i++) inputs[i].disabled = true;
            });
        });

        $http({
            method: 'get',
            url: 'Scaffolding/getAttachments.php?Task_ID=' + $scope.thisForm.TASK_ID
        }).then(function successCallback(response) {
            $scope.$applyAsync(function () {
                $scope.Attachments = response.data;
                console.log($scope.Attachments);
            });
        });
    }

    $scope.editEstimation = function () {
        
        if(!$scope.thisForm.IsEditMode)
        {
            $scope.temp =  JSON.parse(JSON.stringify($scope.newEstimate));
            var inputs = document.getElementsByTagName("INPUT");
            for (var i = 0; i < inputs.length; i++) inputs[i].disabled = false;
            var inputs = document.getElementsByTagName("SELECT");
            for (var i = 0; i < inputs.length; i++) inputs[i].disabled = false;
            var inputs = document.getElementsByTagName("TEXTAREA");
            for (var i = 0; i < inputs.length; i++) inputs[i].disabled = false;
            document.getElementById("CONFINEDtab").disabled = true ;
            $scope.$applyAsync(function () {
                $scope.thisForm.IsEditMode = 1 ;
           });
        }
        else
        {
            $scope.newEstimate = JSON.parse(JSON.stringify($scope.temp));
            $scope.calculateEstimation();
            var inputs = document.getElementsByTagName("INPUT");
            for (var i = 0; i < inputs.length; i++) inputs[i].disabled = true;
            var inputs = document.getElementsByTagName("SELECT");
            for (var i = 0; i < inputs.length; i++) inputs[i].disabled = true;
            var inputs = document.getElementsByTagName("TEXTAREA");
            for (var i = 0; i < inputs.length; i++) inputs[i].disabled = true;
            document.getElementById("CONFINEDtab").disabled = true ;
            $scope.$applyAsync(function () {
                $scope.thisForm.IsEditMode = 0 ;
           });
        }

    }
    
    //Uploading Attachment
 

    $scope.upload = function () {
        $http({
            method: 'get',
            url: 'Scaffolding/getAttachments.php?Task_ID=' + $scope.thisForm.TASK_ID
        }).then(function successCallback(response) {
            $scope.$applyAsync(function () {
                $scope.Attachments = response.data;
                console.log($scope.Attachments);
            });
        });
        document.getElementById("AttachmentForm").reset();
    }

    $(document).ready(function() { 
        $('#AttachmentForm').ajaxForm(function() { 
            $scope.upload() ;
        }); 
    });


    //calculation of Estimation
    $scope.calculateEstimation = function () {
        
        var request = $http({
            method: 'post',
            url: 'Scaffolding/EstimateCalculation.php',
            data: $scope.newEstimate,
            config: 'Content-Type: application/json;' 
            //headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        });
        
        /* Check whether the HTTP Request is successful or not. */
        request.then(function(response){
            $scope.$applyAsync(function () {
                $scope.calculated = response.data ;
                console.log($scope.calculated) ;
           });
            //console.log("test");    
        },
        function(error){
            $scope.msg = error.data ;
        });
        
    }

    $scope.addEstimation = function () {
        
        var request = $http({
            method: 'post',
            url: 'Scaffolding/addEstimation.php',
            data: $scope.calculated[0],
            config: 'Content-Type: application/json;' 
            //headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        });
        
        /* Check whether the HTTP Request is successful or not. */
        request.then(function(response){
            $scope.msg = response.data ;
            location.href = '#!/Scaffolding/Estimate//'+$scope.msg+'/' ;
        },
        function(error){
            $scope.msg = error.data ;
        });
        console.log($scope.msg);
    }

    $scope.updateEstimation = function () {
        
        var request = $http({
            method: 'post',
            url: 'Scaffolding/updateEstimation.php',
            data: $scope.calculated[0],
            config: 'Content-Type: application/json;' 
            //headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        });
        
        /* Check whether the HTTP Request is successful or not. */
        request.then(function(){

            location.href = '#!/Scaffolding/Estimate//'+$scope.thisForm.TASK_ID+'/' ;
        },
        function(error){
            $scope.msg = error.data ;
        });
        console.log($scope.msg);
    }

    $scope.downloadAttachment = function(id) {
        location.href = 'Scaffolding/viewAttachment.php?id='+id ;
    }
}]);


//Controller for ADD-ACTUAL page
app.controller('scaffActual', ['$scope', '$http', '$routeParams' , function ($scope, $http, $routeParams) {
    $scope.inputValue = {};
    $scope.temp = {};
    $scope.thisForm = {};
    $scope.thisForm.IsEstimation = 0 ;
    $scope.thisForm.IsEditMode = 0 ;
    $scope.inputValue.TASK_ID = $routeParams.Task_ID ;

    //Getting Estimated Task Values
    $http({
        method: 'get',
        url: 'Scaffolding/getTaskData.php?Task_ID=' + $scope.inputValue.TASK_ID
       }).then(function successCallback(response) {
        $scope.$applyAsync(function () {
            $scope.Estimated = response.data;
            console.log($scope.Estimated);
       });
    });

    //Getting Actual Task Values
    $http({
        method: 'get',
        url: 'Scaffolding/getActualData.php?Task_ID=' + $scope.inputValue.TASK_ID
       }).then(function successCallback(response) {
        $scope.$applyAsync(function () {
            $scope.Actuals = response.data;
            console.log($scope.Actuals);
            if($scope.Actuals[0]!=null){
                $scope.inputValue = JSON.parse(JSON.stringify($scope.Actuals[0]));
                $scope.calculateActual();
                var inputs = document.getElementsByTagName("INPUT");
                for (var i = 0; i < inputs.length; i++) inputs[i].disabled = true;
                var inputs = document.getElementsByTagName("SELECT");
                for (var i = 0; i < inputs.length; i++) inputs[i].disabled = true;
                var inputs = document.getElementsByTagName("TEXTAREA");
                for (var i = 0; i < inputs.length; i++) inputs[i].disabled = true;
            }
            console.log($scope.inputValue);
       });
    });

    //Functionality of "VIEW ESTIMATE" button
    $scope.viewEstimate = function(){

        var element = document.getElementById("viewEstimate"); 
        var classes = element.className.split(" ");
        var i = classes.indexOf("active");
        if(i<0)
        {
            console.log($scope.Estimated);
            $scope.temp =  JSON.parse(JSON.stringify($scope.inputValue)); 
            //$scope.inputValue = JSON.parse(JSON.stringify($scope.Estimated[0])); 
            $scope.inputValue = JSON.parse(JSON.stringify($scope.Estimated[0]));
            $scope.calculateActual();
            var inputs = document.getElementsByTagName("INPUT");
            for (var i = 0; i < inputs.length; i++) inputs[i].disabled = true;
            var inputs = document.getElementsByTagName("SELECT");
            for (var i = 0; i < inputs.length; i++) inputs[i].disabled = true;
            var inputs = document.getElementsByTagName("TEXTAREA");
            for (var i = 0; i < inputs.length; i++) inputs[i].disabled = true;
            $scope.$applyAsync(function () {
                $scope.thisForm.IsEstimation = 1 ;
           });
            console.log($scope.thisForm.IsEstimation);
        } 
        else
        {
            $scope.inputValue = JSON.parse(JSON.stringify($scope.temp));
            $scope.calculateActual();
            console.log($scope.Actuals)
            if(($scope.Actuals[0]==null)||($scope.thisForm.IsEditMode))
            {
                var inputs = document.getElementsByTagName("INPUT");
                for (var i = 0; i < inputs.length; i++) inputs[i].disabled = false;
                var inputs = document.getElementsByTagName("SELECT");
                for (var i = 0; i < inputs.length; i++) inputs[i].disabled = false;
                var inputs = document.getElementsByTagName("TEXTAREA");
                for (var i = 0; i < inputs.length; i++) inputs[i].disabled = false;
            }
            document.getElementById("CONFINEDtab").disabled = true ;
            $scope.$applyAsync(function () {
                $scope.thisForm.IsEstimation = 0 ;
           });
        }    
    }

    //Functionality of "SAME AS ESTIMATION" button
    $scope.sameAsEstimation = function(){

        $scope.inputValue = JSON.parse(JSON.stringify($scope.Estimated[0]));
        // $scope.inputValue = $scope.Estimated[0] ; 
        $scope.calculateActual();
        var inputs = document.getElementsByTagName("INPUT");
        for (var i = 0; i < inputs.length; i++) inputs[i].disabled = false;
        var inputs = document.getElementsByTagName("SELECT");
        for (var i = 0; i < inputs.length; i++) inputs[i].disabled = false;
        var inputs = document.getElementsByTagName("TEXTAREA");
        for (var i = 0; i < inputs.length; i++) inputs[i].disabled = false;
        document.getElementById("CONFINEDtab").disabled = true ;
    }

    //Functionality of "EDIT" button
    $scope.editActual = function(){

        if(!$scope.thisForm.IsEditMode)
        {
            var inputs = document.getElementsByTagName("INPUT");
            for (var i = 0; i < inputs.length; i++) inputs[i].disabled = false;
            var inputs = document.getElementsByTagName("SELECT");
            for (var i = 0; i < inputs.length; i++) inputs[i].disabled = false;
            var inputs = document.getElementsByTagName("TEXTAREA");
            for (var i = 0; i < inputs.length; i++) inputs[i].disabled = false;
            document.getElementById("CONFINEDtab").disabled = true ;
            $scope.$applyAsync(function () {
                $scope.thisForm.IsEditMode = 1 ;
           });
        }
        else
        { 
            $scope.inputValue = JSON.parse(JSON.stringify($scope.Actuals[0]));
            $scope.calculateActual();
            var inputs = document.getElementsByTagName("INPUT");
            for (var i = 0; i < inputs.length; i++) inputs[i].disabled = true;
            var inputs = document.getElementsByTagName("SELECT");
            for (var i = 0; i < inputs.length; i++) inputs[i].disabled = true;
            var inputs = document.getElementsByTagName("TEXTAREA");
            for (var i = 0; i < inputs.length; i++) inputs[i].disabled = true;
            document.getElementById("CONFINEDtab").disabled = true ;
            $scope.$applyAsync(function () {
                $scope.thisForm.IsEditMode = 0 ;
           });
        }

    }

    //Uploading Attachment
    $(document).ready(function() { 
        $('#AttachmentForm').ajaxForm(function() { 
        }); 
    });

    //calculation of Actual
    $scope.calculateActual = function () {
        
        var request = $http({
            method: 'post',
            url: 'Scaffolding/EstimateCalculation.php',
            data: $scope.inputValue,
            config: 'Content-Type: application/json;' 
            //headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        });
        
        /* Check whether the HTTP Request is successful or not. */
        request.then(function(response){
            $scope.$applyAsync(function () {
                $scope.calculated = response.data ;
                console.log($scope.calculated) ;
           });
            //console.log("test");    
        },
        function(error){
            $scope.msg = error.data ;
        });
        
    }

    //Adding actual to database
    $scope.addActual = function () {
        
        var request = $http({
            method: 'post',
            url: 'Scaffolding/addActual.php',
            data: $scope.calculated[0],
            config: 'Content-Type: application/json;' 
            //headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        });
        
        /* Check whether the HTTP Request is successful or not. */
        request.then(function(response){
            $scope.msg = response.data ;
        },
        function(error){
            $scope.msg = error.data ;
        });
        console.log($scope.msg);
    }

    $scope.updateActual = function () {
        
        var request = $http({
            method: 'post',
            url: 'Scaffolding/updateActual.php',
            data: $scope.calculated[0],
            config: 'Content-Type: application/json;' 
            //headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
        });
        
        /* Check whether the HTTP Request is successful or not. */
        request.then(function(){

            location.href = '#!/Scaffolding/Actual/'+$scope.inputValue.TASK_ID+'/' ;
        },
        function(error){
            $scope.msg = error.data ;
        });
        console.log($scope.msg);
    }
}]);