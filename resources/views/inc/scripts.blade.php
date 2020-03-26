
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}'"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

<script src="{{asset('js/contact_custom.js')}}"></script>

<style>
           /* Base for label styling */
[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
  position: absolute;
  left: -9999px;
}
[type="checkbox"]:not(:checked) + label,
[type="checkbox"]:checked + label {
  position: relative;
  padding-left: 1.95em;
  cursor: pointer;
}

/* checkbox aspect */
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before {
  content: '';
  position: absolute;
  left: 0; top: 0;
  width: 1.25em; height: 1.25em;
  border: 2px solid #ccc;
  background: #fff;
  border-radius: 4px;
  box-shadow: inset 0 1px 3px rgba(0,0,0,.1);
}
/* checked mark aspect */
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  content: '\2713\0020';
  position: absolute;
  top: .15em; left: .22em;
  font-size: 1.3em;
  line-height: 0.8;
  color: #09ad7e;
  transition: all .2s;
  font-family: 'Lucida Sans Unicode', 'Arial Unicode MS', Arial;
}
/* checked mark aspect changes */
[type="checkbox"]:not(:checked) + label:after {
  opacity: 0;
  transform: scale(0);
}
[type="checkbox"]:checked + label:after {
  opacity: 1;
  transform: scale(1);
}
/* disabled checkbox */
[type="checkbox"]:disabled:not(:checked) + label:before,
[type="checkbox"]:disabled:checked + label:before {
  box-shadow: none;
  border-color: #bbb;
  background-color: #ddd;
}
[type="checkbox"]:disabled:checked + label:after {
  color: #999;
}
[type="checkbox"]:disabled + label {
  color: #aaa;
}
/* accessibility */
[type="checkbox"]:checked:focus + label:before,
[type="checkbox"]:not(:checked):focus + label:before {
  border: 2px dotted blue;
}

/* hover style just for information */
label:hover:before {
  border: 2px solid #4778d9!important;
}


           </style>
           <script>
           function checkForm(frm){
	var destCount = frm.elements['type_course[]'].length;
	var destSel   = false;
	for(i = 0; i < destCount; i++){
		if(frm.elements['type_course[]'][i].checked){
			destSel = true;
			break;
		}
	}

	if(!destSel){
		alert(" اختار شناوا تستحق !");
	}
	return destSel;
}
           </script>




<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="gouvernorat"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url:'dynamic_dependent/fetch/'+stateID ,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {


                        $('select[name="municipalite"]').empty();
                        $.each(data, function(key, value) {

                            console.log(value);
                            $('select[name="municipalite"]').append('<option value="'+ value.id +'">'+ value.nom_municipalite +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="municipalite"]').empty();
            }
        });
    });
</script>
<style>
          
          .my-btn, .my-btn-border, .btn-bell {
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            
            transform: translate(-50%, -50%);
          }
          .my-btn {
            height: 10px; 
            width: 10px;
            box-shadow: -1px 2px 10px #999;
            background: #ef7575;
            animation-name: col;
            animation-duration: 2s;
            animation-iteration-count: infinite;
          }
          .my-btn-border {
            height: 59px; 
            width: 59px;
            border: 1px solid #ef7575 !important;
            animation-name: bord-pop;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            box-shadow: 2px 2px 5px #ccc, -2px -2px 5px #ccc ;
          }
          .btn-bell {
            color: #ef7575;
            font-size: 17px;
            animation-name: bell-ring;
            animation-duration: 2s;
            animation-iteration-count: infinite;
          }
          @keyframes bord-pop {
            0% {
              transform: translate(-50%, -50%);
            }
            50% {
              transform: translate(-50%, -50%) scale(1);
              opacity: 0.1;
            }
            100% {
              transform: translate(-50%, -50%) scale(1);
              opacity: 0;
            }
          }
          @keyframes col {
            0% {
              transform: scale(1) translate(0,0);
            }
            10% {
              transform: scale(1.1) translate(0,0);
            }
            75% {
              transform: scale(1) translate(0,0);
            }
            100% {
              transform: scale(1) translate(0,0);
            }
          }
          @keyframes bell-ring {
            0% {
              transform: translate(-50%, -50%);
            }
            5%, 15% {
              transform: translate(-50%, -50%) rotate(25deg);
            }
            10%, 20% {
              transform: translate(-50%, -50%) rotate(-25deg);
            }
            25%  {
              transform: translate(-50%, -50%) rotate(0deg);
            }
            100% {
              transform: translate(-50%, -50%) rotate(0deg);
            }
          }
          </style>
          <style>table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            width: 100%;
            table-layout: fixed;
          }
          
          table caption {
            font-size: 1.5em;
            margin: .5em 0 .75em;
          }
          
          table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: .35em;
          }
          
          table th,
          table td {
            padding: .625em;
            text-align: center;
            overflow: auto;
            
          }
          
          table th {
            font-size: .90em;
            letter-spacing: .1em;
            text-transform: uppercase;
          }
          
          @media screen and (max-width: 600px) {
            table {
              border: 0;
            }
          
            table caption {
              font-size: 1.3em;
            }
            
            table thead {
              border: none;
              clip: rect(0 0 0 0);
              height: 1px;
              margin: -1px;
              overflow: hidden;
              padding: 0;
              position: absolute;
              width: 1px;
            }
            
            table tr {
              border-bottom: 3px solid #ddd;
              display: block;
              margin-bottom: .625em;
            }
            
            table tbody tr td {
              border-bottom: 1px solid #ddd;
            overflow: auto;
              font-size: .8em;
            
            
            }
            
            
            
          
          </style>