<!-- Este index.php es el contenido de HTTP_GEt_Post_Put_Del_CURL.php - copia  -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get-Post-Put_Del_API</title>
    <style>        

        .div-select { width:100%; text-align:center; margin:10px;}

        .methodSelect { width: 150px;  text-align: left; margin:20px; margin-left:0px; padding-left:10px; }
        
        .method-div {width:90%; min-height:200px; border:5px solid #cccccc; }
        .method-div p {text-align: left;}
        .method-div #methodSel { margin-left:20px; margin-top:20px; }
        .method-div #methodAnswer { margin:20px; min-height:150px; border: 2px solid #ff8c66; }

        #div-data { display: none; text-align: center; margin:10px; padding:10px; width:100%; min-height:100px; }
        #div-data h2 { width:100%;}

        #curlData { margin:10px; background-color: #a3a375; color:white; border:10px solid #e2e2e2;}

        .tbl-td-button { text-align:center; }
        .paramButton { width:auto; height: 20px; text-align:center; margin:10px; }  
        
        .disp-row-center { display: flex; margin:20px; flex-direction: row;flex-wrap: wrap; justify-content: center; align-items: stretch; align-content: center; }
        .disp-col-center { display: flex; margin:20px; flex-direction: column; flex-wrap: wrap; justify-content: center; align-items: center; align-content: center; }

    </style>

</head>
<body>

<div style='margin-left:0px;' class='disp-row-center'>

    <h2>CURL methods using ajax and js fetch</h2>
    <div class="div-select">
        <select id='methodSelected' class='methodSelect'>
            <option value='0'>SELECT</option>
            <option value='READ_ME'>READ.ME</option>
            <option value='GET'>GET</option>
            <option value='POST'>POST</option>
            <option value='PUT'>PUT</option>
            <option value='DEL'>DELETE</option>
        </select>
    </div>

    <div id='div-data' class='disp-col-center'><table id='curlData' class='curlDataValues'></table></div>

    <div class='method-div'>
        <p id='methodSel'>METHOD ANSWER</p>
        <div id='methodAnswer'></div>
    </div>

</div>

<script>

    var methodSelected = document.getElementById("methodSelected");  

    methodSelected.addEventListener("click", () => {
        methodSelected.addEventListener("change", () => {
            console.log('method Selected ' + methodSelected.value); 

            document.getElementById('methodAnswer').innerHTML = "";
            document.getElementById('curlData').innerHTML = "";

            document.getElementById('div-data').style.display='flex'; 

            if ( methodSelected.value != 'DEL') { document.getElementById('methodSel').innerHTML = 'METHOD: ' + methodSelected.value;  }
                else { document.getElementById('methodSel').innerHTML = 'METHOD: DELETE'; }

            // switch case to create form for selected method parameters
            switch ( methodSelected.value ) {

                case 'READ_ME':
                    window.open('index-old.php', '_blank');  // es el equivalente al read.me
                    window.location.href = "index.php";    
                    break;

                case 'GET':

                    param_names = ['id'];
                    make_table('curlData','GET',1,param_names);

                    btnTag=methodSelected.value + '-button';
                    var tbl_btn = document.getElementById(btnTag);  
                    
                    tbl_btn.addEventListener("click", () => {

                        var id = document.getElementById('id-value');
                        // console.log(title.value + '-' + status.value + '-' + content.value + '-' + user_id.value);

                        if (id == '' ) { queryString = ""; } 
                        else { queryString = "&id=" + id.value; }
                        //queryString = "&id=" + id.value;                        
                        php_curl_url = 'ajax_curl_method.php?methodSel=' + methodSelected.value + queryString;
                        console.log('ajax php: ' + php_curl_url);
                        ajax_curl_method('methodAnswer',php_curl_url);   

                    })  

                    break;

                case 'POST':

                    param_names = ['title','status','content','user_id'];
                    make_table('curlData','POST',4,param_names);
                    btnTag=methodSelected.value + '-button';
                    var tbl_btn = document.getElementById(btnTag);  
                    //var tbl_btn = document.getElementById("tbl-button");  
                    
                    tbl_btn.addEventListener("click", () => {
                        
                        var title = document.getElementById('title-value');
                        var status = document.getElementById('status-value');
                        var content = document.getElementById('content-value');
                        var user_id = document.getElementById('user_id-value');
                        // console.log(title.value + '-' + status.value + '-' + content.value + '-' + user_id.value);

                        queryString = "&title=" + title.value + "&estatus=" + status.value + "&content=" + content.value + "&user_id=" + user_id.value;
                        php_curl_url = 'ajax_curl_method.php?methodSel=' + tbl_btn.value + queryString;
                        console.log('ajax php: ' + php_curl_url);
                        ajax_curl_method('methodAnswer',php_curl_url);   

                    })  

                    break;

                case 'PUT':

                    param_names = ['id','title','status','content','user_id'];
                    make_table('curlData','PUT',5,param_names);
                    btnTag=methodSelected.value + '-button';
                    var tbl_btn = document.getElementById(btnTag);  
                    //var tbl_btn = document.getElementById("tbl-button");  
                    
                    tbl_btn.addEventListener("click", () => {

                        var id = document.getElementById('id-value');    
                        var title = document.getElementById('title-value');
                        var status = document.getElementById('status-value');
                        var content = document.getElementById('content-value');
                        var user_id = document.getElementById('user_id-value');
                        // console.log(title.value + '-' + status.value + '-' + content.value + '-' + user_id.value);

                        queryString = "&id=" + id.value + "&title=" + title.value + "&estatus=" + status.value + "&content=" + content.value + "&user_id=" + user_id.value;
                        php_curl_url = 'ajax_curl_method.php?methodSel=' + tbl_btn.value + queryString;
                        console.log('ajax php: ' + php_curl_url);
                        ajax_curl_method('methodAnswer',php_curl_url);   
                    })

                    break;

                case 'DEL':

                    param_names = ['id'];
                    make_table('curlData','DEL',1,param_names);

                    btnTag=methodSelected.value + '-button';
                    var tbl_btn = document.getElementById(btnTag);  
                    
                    tbl_btn.addEventListener("click", () => {

                        var id = document.getElementById('id-value');
                        // console.log(title.value + '-' + status.value + '-' + content.value + '-' + user_id.value);

                        if (id == '' ) { queryString = ""; } 
                        else { queryString = "&id=" + id.value; }
                        //queryString = "&id=" + id.value;                        
                        php_curl_url = 'ajax_curl_method.php?methodSel=' + methodSelected.value + queryString;
                        console.log('ajax php: ' + php_curl_url);
                        ajax_curl_method('methodAnswer',php_curl_url);   

                    })  

                    break;

                default:     
                    document.getElementById('curlData').innerHTML = 'upssss... case default option activated';
            }


        })
    })

    function ajax_curl_method(_tag,_url) {    

        console.log('from ajax_curl_method, tag: ' + _tag + ', ulr:' + _url);    

        fetch(_url)

        .then(response => {
            if (response.ok)
                return response.text()
            else
                throw new Error(response.status)
        })

        .then(data => {        
            document.getElementById(_tag).innerHTML = data;  
            // openTree();  
            
        })

        .catch(err => {
            console.error("ERROR: ", err.message);
            document.getElementById(_tag).innerHTML = "ERROR: " + err.message; 

        });
    }

    function make_table(tagId,method,numbRows,paramArray) {
        
        //param_names = ['title','status','content','user_id'];
        var body = document.getElementById("curlData");
        body.innerHTML = "";        

        var my_table   = document.createElement("table");
        var tblBody = document.createElement("tbody");

        // Crea las my_cells
        for (var i = 0; i < numbRows; i++) {
            var my_row = document.createElement("tr");
            var my_cell = document.createElement("td");

            // first td
            var input = document.createElement("input");
            input.type = "text";
            input.id = paramArray[i];
            input.value = paramArray[i];
            input.setAttribute('param',i);
            input.className = "param"; // set the CSS class

            // insert tag in 'td' and 'td' in 'tr'  
            my_cell.appendChild(input); 
            my_row.appendChild(my_cell);
            
            // second td
            my_cell = document.createElement("td");            
            input = document.createElement("input");
            input.type = "text";
            input.placeholder = "value";
            input.id = paramArray[i] + '-value';
            input.setAttribute('value','');
            input.className = "value"; // set the CSS class

            // insert tag in 'td' and 'td' in 'tr'          
            my_cell.appendChild(input); 
            my_row.appendChild(my_cell);

            // insert row
            tblBody.appendChild(my_row);

        }

        // 'tr' and 'td' for button - listening
        my_row = document.createElement("tr");
        my_cell = document.createElement("td");
        my_cell.setAttribute('colspan','2');
        my_cell.className = "tbl-td-button";

        butt = document.createElement("button");
        butt.id = method + "-button";    
        butt.value = method;    
        butt.className = "paramButton";
        butt.innerHTML= method;
        my_cell.appendChild(butt); 
        my_row.appendChild(my_cell);
        tblBody.appendChild(my_row);

        // insert table body
        my_table.appendChild(tblBody);
        body.appendChild(my_table);
        my_table.setAttribute("border", "1");

    }
    
</script>

</body>
</html>