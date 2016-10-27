
  $(window).on('hashchange', function() {
      if (window.location.hash) {
          var page = window.location.hash.replace('#', '');
          if (page == Number.NaN || page <= 0) {
              return false;
          } else {
        	
        	  getPosts(page);
          }
      }
  });
  $(document).ready(function() {
      $(document).on('click', '.pagination a', function (e) {
    	  getPosts($(this).attr('href').split('page=')[1]);
          e.preventDefault();
      });
  });

  function getPosts(page) {
	  var e = document.getElementById("selectDistrict");   
	  if(e != null)
		  {
	  var district = e.options[e.selectedIndex].value;
      $.ajax({
          url : "getInfoOfficerDetailsByDistrict/"+ district +'?page=' + page,
          dataType: 'html',
      }).done(function (response) {
    	  $("#results").html(response);
         // location.hash = page;
      }).fail(function () {
          alert('NO records found');
      });
		  }
	  else{
		  var t = document.getElementById("selectOfficeType");
		  var officeType = t.options[t.selectedIndex].value;
		   $.ajax({
		          url : "getInfoOfficerDetailsByOthers/"+ officeType +'?page=' + page,
		          dataType: 'html',
		      }).done(function (response) {
		    	  $("#results").html(response);
		         // location.hash = page;
		      }).fail(function (response) {
		    	  $("#results").html(response);
		          alert('NO records found.');
		      });
	  }
           
  }
  
