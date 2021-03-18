<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="./vici-admin-them/theme/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./vici-admin-them/theme/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="./vici-admin-them/theme/css/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
    	<link href="./vici-admin-them/theme/css/custom.css" rel="stylesheet">
  </head>
  <body class="nav-md" onkeydown="KeyCode(event)">
    <div class="container body" style="display:none;" >
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo $_SERVER['PHP_SELF'];?>" class="site_title"><i class="fa fa-paw"></i> <span>Vicidial!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="./vici-admin-them/theme/images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul id="menu" class="nav side-menu">
                  
				  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a href='/vicidial/welcome.php' data-toggle="tooltip" data-placement="top" title="Home">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
              </a>
              <a hreft='../agc/timeclock.php?referrer=admin' data-toggle="tooltip" data-placement="top" title="TimeClock">
                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
              </a>
              <a href='manager_chat_interface.php' data-toggle="tooltip" data-placement="top" title="Chat">
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
              </a>
              <a href='/vicidial/admin.php?force_logout=1' data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li>
                    <a href="/vicidial/welcome.php"><i class="fa fa-home pull-right"></i> Home</a>
                    </li> <li>
                    <a href="../agc/timeclock.php?referrer=admin"><i class="fa fa-clock-o pull-right"></i> Timeclock</a>
                    </li><li><a href="manager_chat_interface.php"><i class="fa fa-commenting-o pull-right"></i>Chat</a>
                    </li>
                    <li><a href="/vicidial/admin.php?force_logout=1"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->
		<!-- page content -->
        <div class="right_col" role="main">

          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>

            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
				  
				  <div id="main_content" class="x_content">
						

                    </div>
                    <!-- End SmartWizard Content -->
					
  <!-- jQuery -->
    <script src="./vici-admin-them/theme/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="./vici-admin-them/theme/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="./vici-admin-them/theme/js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="./vici-admin-them/theme/js/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="./vici-admin-them/theme/js/jquery.smartWizard.js"></script>
	<!-- bootstrap-daterangepicker -->
    <script src="./vici-admin-them/theme/js/moment.min.js"></script>
    <script src="./vici-admin-them/theme/js/daterangepicker.js"></script>
    <script src="./vici-admin-them/theme/js/jquery.dataTables.min.js"></script>
   

<!-- <script>
    $(function(){
        $.post('is_login.php', function(data){
          if(data == 0){
            window.location.href = "/vicidial/blank_page.php";
          }
        }).fail(function(results) {
            if(results.status == 401){
                window.location.href = "/vicidial/blank_page.php";
            }
        }).always(function(){
            // vm.loading(false);
        });
    });
</script> -->

<script src="../dividize.js"></script>
<script src="../assets/js/knockout-3.3.0.js"></script>
<!-- urlss urls -->
<script src="./vici-admin-them/theme/functions_urls/urls.js"></script>
<script src="./vici-admin-them/theme/functions_urls/vici_functions.js"></script>
<style>
#vicidial_report{width:570px;}
input[name="search_archived_data"]{
  margin-top: 30px
}
#audio_chooser_span iframe{margin-top:10px}
#audio_chooser_span{position:fixed;left:0;right:0;margin-left:auto;margin-right:auto;background: #fff;width:740px;height: 440px;bottom:50px;box-shadow:0px 0px 20px rgba(0,0,0,0.5);z-index:1;display: none}
#audio_chooser_span a{position: absolute;right:20px;top:5px;font-size:22px}
td{white-space: nowrap;}
/*body{overflow-x:hidden }*/

</style>
<script>
function KeyCode(event){
  var x = event.keyCode;
    if (x == 27) {  // 27 is the ESC key
        $("#audio_chooser_span").css("display", "none")
    }
}

	function tableToJson(table) {
		var data = [];

		// first row needs to be headers
		var headers = [];
		for (var i=0; i<table.rows[0].cells.length; i++) {
			headers[i] = table.rows[0].cells[i].innerHTML.toLowerCase().replace(/ /gi,'');
		}

		// go through cells
		for (var i=1; i<table.rows.length; i++) {

			var tableRow = table.rows[i];
			var rowData = {};

			for (var j=0; j<tableRow.cells.length; j++) {

				rowData[ headers[j] ] = tableRow.cells[j].innerHTML;

			}

			data.push(rowData);
		}

		return data;
	}
	
	function isMenu(self){
		return $(self).attr('bgcolor') == '#015B91';
	}
	
	function isSubMenu(self){
		return $(self).hasClass('subhead_style_selected') || $(self).hasClass('subhead_style');
	}
	
	function isSubMenuSelected(self){
		return $(self).hasClass('subhead_style_selected');
	}
	
	function mapMenu(key, item){
		var a = $(item).find('a');
			return {
				a: a.html(),
				href: a.prop('href'),
				subHead: isSubMenu(item),
				subheadSelected: isSubMenuSelected(item),
				isSelected: a.parent().hasClass('head_style_selected'),
				isReport: (a.text() == "  Reports ")
			};
	}
	
	function filterMenu(){
		return isMenu(this) || isSubMenu(this);
	}
	
	function renderMenuSubItem(item){ 
    if(String(item.href)!="undefined"){
      //se ejecuta si el submenu no da como valor "undefined"
      return '<li class="'+(item.subheadSelected ? 'current-page' : '')+'" ><a href="'+item.href+'"><i class=""></i> '+item.a+'</a></li>';
    }
	}
	
	function buildSubMenu(item){
		return '<ul class="nav child_menu" >'+item.subMenu.map(function(item){ return renderMenuSubItem(item); }).join('')+'</ul>';

	}
	
	function renderMenuItem(item){
		return buildMenu(item);
	}
	
	function buildMenu(item){
		var subMenu = item.isSelected ? buildSubMenu(item) : '';
		var href = item.isSelected && !item.isReport ? '#' : 'href="'+item.href+'"';
  
		return '<li class="'+( item.isSelected ? 'active' : '' )+'"><a '+href+' ><i class=""></i> '+item.a+'<span class="fa fa-chevron-down"></span></a>'+subMenu+'</li>';
	}
	
	function msieversion() {

		var ua = window.navigator.userAgent;
		var msie = ua.indexOf("MSIE ");
		return (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./));
	}

	$(document).ready(function(){

		if(msieversion())
			return;
		$('.container').show();
		var table = $('table');
		table.addClass(function( index ) {
      return "table";
    });
		const MENU = 1;
		const CONTENT = 3;
		var mainTable = table.clone();
		table.remove();
		var menuOptions = $(mainTable[MENU]).find('tbody tr').filter(filterMenu).map(mapMenu).get();
		var menus = menuOptions.filter(function(item){ return !item.subHead});
		var noDataTable = ['ADD=999999', 'ADD=999998', 'user='];
		console.log('menu',menus);
		menus.filter(function(item){ return item.isSelected}).forEach(function(item){ item.subMenu = menuOptions.filter(function(item){ return item.subHead}); });
		$('#menu').html(menus.map(function(item){ 
			return renderMenuItem(item); 
		}).join('')).prepend('<li class=""><a href="./admin.php">DashBoard<span class="fa fa-chevron-down"></span></a></li>');

	   
    $('#main_content').html(mainTable[CONTENT]);

		if(typeof window.location.href.split('?')[1] == 'undefined')
		{

			$('#main_content').append(mainTable[4]);
			$('#main_content').append(mainTable[5]);
			$('#main_content').append(mainTable[6]);
		}
		//admin.php default data.
		if(typeof window.location.href.split('?')[1] == 'undefined' && window.location.href.indexOf('admin') > 0){
			url='default';
		}

//datepicker function

 $('#tcalico_0, #tcalico_1').attr('id', 'date')
 $('#date').attr('id', 'date2')

 $('#date').click(function(){
  $('input[name=end_date]').focus()
 }) 
 $('#date2').click(function(){
  $('input[name=query_date]').focus()
 })

 $('input[name=query_date], input[name=end_date], input[name=begin_date], input[name=query_date], input[name=end_date], input[name=begin_date]').val("").daterangepicker({
  locale: {
      format: 'YYYY-MM-DD'
    },
        singleDatePicker: true,
        showDropdowns: true,
    });

    // some display content information for the template
    $('b').each(function(){
          var info = $(this).html()
          if(info=='Show Dialable Leads Count'){
            $('font').each(function(){
              var info = $(this).html()
               $('.x_panel').html(info)
             });
          }
      });

    if(url[0]=='7111111&script_id'){
      $('font, table, tr').each(function(){
          var info = $(this).html()
          $('.x_panel').html(info)
      })
      $('#audio_chooser_span').remove()
      $('font').css({'color': '#fff'})
  }
  //////////////////////////////////
    
  //////////////////////////////////
	$("input[value=MODIFY], input[value=SUBMIT]").click(function(){
      $("form").submit()
      });

	//call_Report error
    db = document.URL.split("?")
    if(String(db[1])!='undefined'){
      db = db[1].split("=")
    }

		if(db[1]=='&run_export' && db[0]=='DB'){
			alert('There are no inbound calls during this time period for these parameters')
		}
   // here would be a for default data for urls
   // go to vici-admin-them/functions_urls carpet to see with more detail.
  //request url values
    var urls = ["1111111111","111111111","3&user", "311111111111&server_id", "13111111111", "12", "11", "999999&stage", "999994", "161111111111", "193111111111", "31&SUB", "3511&menu_id", "3111&group_id", "10000000000", "182000000000", "3111&group_id=AGENTDIRECT", "3511&menu_id=defaultlog", "5&user", "6&user", "user=", "311111111111111", "321111111111111", "1930000000", "999999", "331111111111111", "999994", "194111111111", "194000000000", "190000000000", "31&campaign_id", "1111111", "131111111111", "131111111", "141111111111", "3111111&script_id", "140111111111", "111111111111", "182111111111", "311111111111111#screen_colors", "34&campaign_id", "31111111&lead_filter_id", "3311&did_id", "1211111111", "11111111111", "12111111111", "1111111111111", "11111111111111", "181111111111", "341111111111111", "171111111111", "192111111111","20200213&list_id"];

    // getting default display to those urls
    for(urlss in urls){
      if(url[0]==urls[urlss]){
        url = "default";
        break;
      }
    }

    if (url != "default")	
    {	
      db2 = document.URL.split("?");
      try {
        var url_variables = db2[1].split("&");
        $.each(url_variables, function( key, value ) {
          var_arr = value.split("=");
          if (var_arr[0]=="ADD")
          {
            if (var_arr[1].substring(0, 1) == "5" || var_arr[1].substring(0, 1)=="6") 
            {
              url = "default";	
            }
          }
        });
      } catch(err) {
        console.log(err);
      }
    }	

    if(noDataTable.indexOf(window.location.href.split('?')[1]) == 1 || url=="default"){

        $('#main_content').html(mainTable[2]);
        delete_tr(); //go to vici-admin-them/functions_urls carpet to see with more detail.

    $("input[name=insertField]").attr("onclick", "insertvalues()");

    }else{
        //url_id of lists for menu2 
      var list = ['100000000000', '100000000', '130000000', '130000000000', '140000000000', '1000000000000', '180000000000', '193000000000', '160000000000', '192000000000', '170000000000', '10', '1000000000', '1200000000', '12000000000', '13000000000', '10000000000000'];
      //////////////////////////////////////
      for(lists in list){
        if(url[0]==list[lists]){
          $('#main_content').prepend(mainTable[2]);
          delete_tr()
           $('tr tr').first().remove();   
          break;
          }
      }

      //////////////////////////////////////
    var listTable = $(mainTable[CONTENT]).find('table').filter(function(){ return $(this).find('input').length < 1; });
      listTable.attr('width','100%');
    
    var tr = listTable.find('tr').first().remove();
      $("<tbody></tbody>").html(tr.get());
      listTable.prepend($("<thead></thead>").html(tr.get()));
      listTable.DataTable({
        "lengthMenu": [[25, 50, -1], [25, 50, "All"]]
       });
      
    }


// changing audio, moh ,voicemail functions for all items//
    $("a").each(function(){
    if($(this).html()==="audio chooser"){
        var att = $(this).attr('href');  
        chooser($(this), att, "launch_chooser", "audio_chooser2");
      }
      
      if($(this).html()=="moh chooser"){
        var att = $(this).attr('href');  
        chooser($(this), att, "launch_moh_chooser", "launch_moh_chooser2");      
      }
      if($(this).html()=="voicemail chooser"){
        var att = $(this).attr('href');  
        chooser($(this), att, "launch_vm_chooser", "launch_vm_chooser2");      
      }
      
    })
    
    
	});
  
</script>

</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <div id="audio_chooser_span"><a onclick="$('#audio_chooser_span').css({'display': 'none', 'cursor': 'pointer'})">click here or press (ESC) X</a><div></div><load></load></div><!--cuadro de dialogo de algunas pantallas-->

<!-- footer content -->
        <footer>
          <div class="pull-right">
            
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    

    
   <!-- Custom Theme Scripts -->
    <script src="./vici-admin-them/theme/js/custom.js"></script>
  </body>
</html>
