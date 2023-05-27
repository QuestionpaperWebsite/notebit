fetch("filematedata/cse/cse_sem_1.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#csetable1");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

fetch("filematedata/cse/cse_sem_2.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#csetable2");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

fetch("filematedata/cse/cse_sem_3.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#csetable3");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

fetch("filematedata/cse/cse_sem_4.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#csetable4");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

fetch("filematedata/cse/cse_sem_5.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#csetable5");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

fetch("filematedata/cse/cse_sem_6.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#csetable6");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

fetch("filematedata/cse/cse_sem_7.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#csetable7");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

fetch("filematedata/cse/cse_sem_8.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#csetable8");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })


    //-------------------------------------------------- IT MAPS --------------------------------------------------------------------

    fetch("filematedata/it/it_sem_1.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#ittable1");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/it/it_sem_2.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#ittable2");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/it/it_sem_3.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#ittable3");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/it/it_sem_4.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#ittable4");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/it/it_sem_5.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#ittable5");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/it/it_sem_6.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#ittable6");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/it/it_sem_7.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#ittable7");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/it/it_sem_8.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#ittable8");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })


    //------------------------------------------------- ECE MAPS -----------------------------------------------------------------------

    fetch("filematedata/ece/ece_sem_1.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#ecetable1");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })


    fetch("filematedata/ece/ece_sem_2.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#ecetable2");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/ece/ece_sem_3.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#ecetable3");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/ece/ece_sem_4.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#ecetable4");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })


    fetch("filematedata/ece/ece_sem_5.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#ecetable5");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })


    fetch("filematedata/ece/ece_sem_6.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#ecetable6");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/ece/ece_sem_7.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#ecetable7");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/ece/ece_sem_8.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#ecetable8");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    //------------------------------------------------ EEE MAPS -------------------------------------------------------------------

    fetch("filematedata/eee/eee_sem_1.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#eeetable1");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/eee/eee_sem_2.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#eeetable2");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/eee/eee_sem_3.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#eeetable3");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/eee/eee_sem_4.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#eeetable4");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/eee/eee_sem_5.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#eeetable5");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/eee/eee_sem_6.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#eeetable6");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

  

    fetch("filematedata/eee/eee_sem_7.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#eeetable7");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/eee/eee_sem_8.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#eeetable8");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

  //-------------------------------------------- ME -----------------------------------------------------------------

  fetch("filematedata/me/me_sem_1.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#metable1");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

  fetch("filematedata/me/me_sem_2.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#metable2");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

  fetch("filematedata/me/me_sem_3.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#metable3");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

  fetch("filematedata/me/me_sem_4.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#metable4");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

  fetch("filematedata/me/me_sem_5.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#metable5");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

  fetch("filematedata/me/me_sem_6.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#metable6");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

  fetch("filematedata/me/me_sem_7.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#metable7");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

  fetch("filematedata/me/me_sem_8.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#metable8");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })


    //---------------------------------------------- CE ------------------------------------------------------------------------------

    fetch("filematedata/ce/ce_sem_1.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#cetable1");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/ce/ce_sem_2.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#cetable2");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/ce/ce_sem_3.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#cetable3");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/ce/ce_sem_4.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#cetable4");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/ce/ce_sem_5.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#cetable5");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/ce/ce_sem_6.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#cetable6");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/ce/ce_sem_7.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#cetable7");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })

    fetch("filematedata/ce/ce_sem_8.json")
    .then(function(response){
        return response.json();
    })
    .then(function(slider){
        let slider_data = document.querySelector("#cetable8");
        let out = "";
        for(let x of slider){
            out += `
    
                        <tr>
                        <td>${x.Name}</td>
                        <td>${x.year}</td>
                        <td>${x.semester}</td>
                        <td><a href="${x.filesrc}" download="${x.filecode}">Download</a></td>
                        </tr>
    
                        
            
            `;

            slider_data.innerHTML = out;
    
           
            
        }
    })
