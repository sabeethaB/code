<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>
<div ng-app="myApp" ng-init="address=[{name:'sabeetha',city:'karur',age:21},{name:'sabeetha',city:'karur',age:21}]">
<ul>
	<li ng-repeat="x in address">{{x.name+''x.city+''x.age+}}</li>
</ul>	
</div>
</body>
</html>
