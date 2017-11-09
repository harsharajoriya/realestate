var base_url = 'http://localhost/realestate/';
function delete_data_from_table(table_name,id,path='',image_name='')
{
       // var base_url = 'http://localhost/realestate/';
    if(confirm('Are you sure you want to delete this ?')){
        var parameters = {};        
         parameters['id'] = id;
         parameters['tableName'] = table_name;
         parameters['path'] = path;
         parameters['image_name'] = image_name;
            $.post(base_url+'common-delete', parameters,function(data) {
                if (data){              
                    var html = "<div class='message alert alert-success'>";
                    html += "<button class='close alert-close' aria-hidden='true'>×</button><h5>Success!</h5><p>";
                    html += "Deleted sucessfully<span class='messageClose'></span></p></div>";
                    $(".content-header").append(html);
                    location.reload();
                  // window.location.reload(true); 
                } else  {               
                    alert("Sorry an error occured and your request could not be processed");       
                    location.reload();
                }       
            });
    }else{
    } 
}
function approve(id,table_name){
    if(confirm("Are you want to approve ?")){
        var url = 'approve-data/'+id+'/'+table_name;
        var xhr = $.get(base_url+url,
            function(data){
                var html = "<div class='message alert alert-success'>";
                html += "<button class='close alert-close' aria-hidden='true'>×</button><h5>Success!</h5><p>";
                html += "data approve sucessfully<span class='messageClose'></span></p></div>";
                $(".content-header").append(html);
                window.location.reload(true);
            });
    }
}
function disapprove(id,table_name){
    if(confirm("Are you want to disapprove ?")){
        var url = 'disapprove-data/'+id+'/'+table_name;
        var xhr = $.get(base_url+url,
            function(data){
                var html = "<div class='message alert alert-success'>";
                html += "<button class='close alert-close' aria-hidden='true'>×</button><h5>Success!</h5><p>";
                html += "data disapprove sucessfully<span class='messageClose'></span></p></div>";
                $(".content-header").append(html);
                window.location.reload(true);
            });
    }
}

