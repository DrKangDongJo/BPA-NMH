
function selectElement(id, valueToSelect) {    
    let element = document.getElementById(id);
    element.value = valueToSelect;
}



function update_table_ajax(table,column,value,condition){
    $.ajax({
                    url: "../php_func/db_func.php",
                    type: "POST",
                    cache: false,
                    async: true,
                    data: {
                        "action": "update",
                        "table": table,
                        "to_update": "`"+column+"` = '" + value + "'",
                        "condition": "id = '"+condition+"'" 
    
                    },
                    success: function(dataResult) {
                        console.log(dataResult);
    
                    }
                });
            }
    