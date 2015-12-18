           
    
        function capture(name) {
            html2canvas($('.bb-wrapper-right'), {
                onrendered: function (canvas) {
                    
                    var imgData = canvas.toDataURL("image/png");
                    var output = encodeURIComponent(imgData);
                    var imgName = name;
                    var Paramaters = "image=" + output + "&name=" + imgName;
                    
                    var url = '../_scripts/save.php';
                    $.ajax({ 
                        type: "POST", 
                        url: url,
                        data: "image=" + output + "&name=" + imgName,
                        success : function(data)
                        {
                            console.log("screenshot done");
                        }
                    });
                }
            });
        }
    