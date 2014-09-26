// function diabloApi($scope, $http) {

// 	var url = 'https://eu.api.battle.net/d3/profile/mac-2679/?callback=JSON_CALLBACK';

// 	$http.jsonp(url).success(function(data) {
// 		$scope.diablo = data;
// 	});
// }


// function Hello($scope, $http) {
//     $http.jsonp('https://eu.api.battle.net/d3/profile/mac-2679/').
//         success(function(data) {
//             $scope.greeting = data;
//         });
// }

// $(function () {

// 	var apiKey = 'mgqy8nb6nfktdw39q5mm7de2jwjpqcc7';

// 	$.getJSON('https://eu.api.battle.net/d3/profile/mac-2679/?locale=en_GB&apikey=mgqy8nb6nfktdw39q5mm7de2jwjpqcc7')

// });

// var apikey = "mgqy8nb6nfktdw39q5mm7de2jwjpqcc7";
// var baseUrl = "https://eu.api.battle.net/d3/profile/mac-2679/?locale=en_GB&apikey=";

// // construct the uri with our apikey
// var moviesSearchUrl = baseUrl + apikey;
// var query = "battleTag";

// $(document).ready(function() {

//   // send off the query
//   $.ajax({
//     url: moviesSearchUrl,
//     dataType: "jsonp",
//     success: searchCallback
//   });
// });

// // callback for when we get back the results
// function searchCallback(data) {
//  $(document.body).append('Found ' + data.total + ' results for ' + query);
//  var movies = data.movies;
//  $.each(movies, function(index, movie) {
//    $(document.body).append('<h1>' + movie.title + '</h1>');
//    $(document.body).append('<img src="' + movie.posters.thumbnail + '" />');
//  });
// }
