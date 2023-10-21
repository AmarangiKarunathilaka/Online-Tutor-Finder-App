<!DOCTYPE html>
<html>
  <head>
    <link href="css/classRequest.css" rel="stylesheet">
  </head>
  <body ng-app="Leave" ng-controller="myCtrl">
 
    <header>  
 
    <div id="mySidenav" style="float:left" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 
    </div>
    
    <nav class="navbar navbar-inverse">
  
    <div id="Details">
      <h1>Class Requests</h1>
      <table style="width:100%">
        <tr>
          <th>Name</th>
          <th>Subject</th>
          
          <th>Date</th> 
          <th>Requested Days</th>
          <th>Requested Time</th>
          <th>Comments</th>
          <th>Status</th>
        </tr>
        <tr>
        <td>1</td>
          <td>Medical</td>
        
          <td>1/3/2017</td>
          <td>1</td>
          <td>3.00PM</td>
        <td><input type="text" placeholder="write your comments and update" class="form-control" /></td>
          <td> <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalUpdate">Accept</button><button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#myModalDelete">Reject</button></td>
        </tr>
          <td>1</td>
          <td>Medical</td>
          <td>1/3/2017</td>
          <td>1</td>
          <td>3.00PM</td>
          <td><input type="text" placeholder="write your comments and update" class="form-control" /></td>
          <td> <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalUpdate">Accept</button><button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#myModalDelete">Reject</button></td>
        </tr>
        </tr>
          <td>1</td>
          <td>Medical</td>
          <td>1/3/2017</td>
          <td>1</td>
          <td>3.00PM</td>
          <td><input type="text" placeholder="write your comments and update" class="form-control" /></td>
          <td> <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalUpdate">Accept</button><button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#myModalDelete">Reject</button></td>
        </tr>
        </tr>
          <td>1</td>
          <td>Medical</td>
          <td>1/3/2017</td>
          <td>1</td>
          <td>3.00PM</td>
          <td><input type="text" placeholder="write your comments and update" class="form-control" /></td>
          <td> <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalUpdate">Accept</button><button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#myModalDelete">Reject</button></td>
        </tr>
        </tr>
          <td>1</td>
          <td>Medical</td>
          <td>1/3/2017</td>
          <td>1</td>
          <td>3.00PM</td>
          <td><input type="text" placeholder="write your comments and update" class="form-control" /></td>
          <td> <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalUpdate">Accept</button><button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#myModalDelete">Reject</button></td>
        </tr>
      </table>
    </div>
  
  
    <script type="text/javascript">
          var app=angular.module('Leave',[]);
          app.controller('myCtrl',function($scope){
            
            $scope.ExpandNotifications=function(){
          $(".notification").style("min-width:300");
              $scope.hello="how are you";
            }
          });
    </script>

  </body>
</html>