<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="{{mix('css/app.css')}}" rel='stylesheet'> 
<link href="{{mix('css/style.css')}}" rel='stylesheet'>  
</head>

<body>

<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>



<script type="text/javascript" src="{{ mix('js/app.js') }}" ></script>
<script type="text/javascript" src="{{ mix('js/script.js') }}" ></script>
</body>
</html>