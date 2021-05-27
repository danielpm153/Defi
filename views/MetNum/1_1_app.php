<head>
	<meta charset="utf-8">
	<!-- ************************************
	     *              CSS                 *
	     ************************************ -->
		<!-- Bootstrap -->
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
		<!-- Custom -->
	<link rel="stylesheet" type="text/css" href="css/app_custom.css">
	<!-- ************************************
		 *          Javascript              *
		 ************************************ -->
		 <!-- Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<!-- <script src="js/jquery-3.3.1.slim.min.js"></script>  -->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<!-- <script src="js/popper.min.js"></script>  -->
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<!-- <script src="js/bootstrap.min.js"></script> -->
	
	
	<!-- Para plotar os graficos -->
	<script src="js/plotly-latest.min.js"></script>
	
	<!-- Para colocar equacoes em LaTeX -->
	<script id="MathJax-script" async src="js/tex-mml-chtml.js"></script>
	<!-- <script src="https://peterolson.github.io/BigInteger.js/BigInteger.min.js"></script> -->
	
	<!-- Para avaliar funcoes -->
	<script src=https://cdnjs.cloudflare.com/ajax/libs/mathjs/7.2.0/math.min.js></script>
	<!-- <script src="js/math.min.js"></script> -->
	
	<!-- Custom scripts -->
	<script src="js/app_geral_interface.js"></script>
	<script src="js/1_1_interface.js"></script>
	<script src="js/1_1_algorithm.js"></script>
    <title>
        Scool
    </title>
</head>

<body onload="checkFileAPI();">
    Méthode de Bisection
	<div id="totalbox" draggable="true">
		<div id="mainbox" class="container row">
	        <div id="visualize" class="col-xs-6 radio-toolbar">
				<div class="btn-group btn-group-toggle" data-toggle="buttons" style="width:100%;">
					<label for="buttongraph" class="btn switchbutton col-xs-6" onclick="click_buttonGraph();" style="width: 50%;"> <input id="buttongraph" type="radio" name="option" checked >
                        GRAPHIQUE</label>
					<label for="buttonlog" class="btn switchbutton col-xs-6" onclick="click_buttonLog();" style="width: 50%;">
						<input id="buttonlog" type="radio" name="option" >
                        ENREGISTRER</label>
				</div>
				
				<div id="showing">
					<div id="divgraph"></div>
					
					<div id="divlog" style="display: none">
						<div id="scroll" class="scrollable">
							<table style="width: 100%;"><tbody id="log"></tbody></table>
						</div>
					</div>
				</div>
			</div>
			<div id="input" class="col-xs-6">
				<div id="title">INPUT</div>
				<div id="parametros">
					<table>
						<tr id="box_function">
							<th rowspan="2" style="width:20%;">
                                Fonction
							</th>
							<td style="width:70%;">
								<input id="entry_function" type="text" onchange="update_function()">
							</td>
							<th rowspan="2" class="icon">
								<svg id="icon_correct_function" style="display: none" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-check-circle" fill="green" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/> </svg>
					
								<svg id="icon_warning_function" style="display: none" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-exclamation-circle" fill="yellow" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/></svg>
					
								<svg id="icon_error_function" style="display: none" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="red" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/> <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/> </svg>
							</th>
						</tr>
						<tr>
							<td>LaTeX</td>
						</tr>
					
						<tr id="box_interval">
							<th rowspan="2" style="width:20%;">
                                Intervalle
							</th>
							<td style="width:70%;">
								<input id="entry_a" type="text" onchange="update_interval()" onkeypress="return validation_float(event)" style="width: 46%;">
								<input id="entry_b" type="text" onchange="update_interval()" onkeypress="return validation_float(event)" style="width: 46%;">
							</td>
							<th rowspan="2" class="icon">
								<svg id="icon_correct_interval" style="display: none" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-check-circle" fill="green" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/> </svg>
					
								<svg id="icon_warning_interval" style="display: none" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-exclamation-circle" fill="yellow" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/></svg>
					
								<svg id="icon_error_interval" style="display: none" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="red" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/> <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/> </svg>
							</th>
						</tr>
						<tr>
							<td>LaTeX</td>
						</tr>
					
						<tr id="box_n">
							<th style="width:20%;">
                                Itérations
							</th>
							<th style="width:70%;">
								<input id="entry_n" type="text" onchange="update_iteraction()" onkeypress="return validation_natural(event)">
							</th>
							<th class="icon">
								<svg id="icon_correct_n" style="display: none" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-check-circle" fill="green" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/> </svg>
					
								<svg id="icon_warning_n" style="display: none" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-exclamation-circle" fill="yellow" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/></svg>
					
								<svg id="icon_error_n" style="display: none" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="red" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/> <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/> </svg>
							</th>
						</tr>
					
						<tr id="box_tol">
							<th style="width:20%;">
                                tolérance
							</th>
							<th style="width:70%;">
								<input id="entry_tol" type="text" onchange="update_tolerance()" onkeypress="return validation_float(event)">
							</th>
							<th class="icon">
								<svg id="icon_correct_tol" style="display: none" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-check-circle" fill="green" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/> </svg>
					
								<svg id="icon_warning_tol" style="display: none" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-exclamation-circle" fill="yellow" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/></svg>
					
								<svg id="icon_error_tol" style="display: none" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="red" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/> <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/> <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/> </svg>
							</th>
						</tr>
					</table>
				</div>
				<button id="button_calcular" type="button" class="btn btn-primary" onclick="click_Calcular();">CALCULER</button>
			</div>
			<div id="trade" class="col-xs-12">
				<div class="row justify-content-around text-center">
					<div class="col-xs-4 tradebutton text-center">
						<button id="button_salvar" type="button" class="btn btn-primary" onclick="click_Salvar();" style="width:100%;">SAUVER INPUT</button>
					</div>
					<div class="col-xs-4 tradebutton text-center">
						<label id="button_import" for="file-upload" class="btn btn-primary" onclick="click_Import();" style="width:100%;">IMPORT</label>
						<input id="file-upload" type="file" style="display: none;" onchange="importfile(this);">
					</div>
					<div class="col-xs-4 tradebutton text-center">
						<button id="button_export" type="button" class="btn btn-primary" onclick="click_Export();" style="width:100%;">EXPORT</button>
					</div>
				</div>
			</div>
		</div>
		<div id="dragdropbox">
			<div style="margin-top: 180px;">
				<div id="icon" style="opacity: 0.7;">
					<svg width="8em" height="8em" viewBox="0 0 16 16" class="bi bi-download" fill="#007bff" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z"/>
					<path fill-rule="evenodd" d="M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z"/>
					<path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z"/>
					</svg>
				</div>
				<h1 style="color: #007bff">Arraste o arquivo para cá </h1>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/init_app.js"></script>
	<script src="js/1_1_code_init.js"></script>
</body>
