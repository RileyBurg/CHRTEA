<div style="text-align: left;padding-left: 10px;">
			<label for = "empName"> Employee Name: </label>
			<input list="employeeSearch" style="margin-top:10px;" class="employeeSearch" id="name" name="empName">
			<div class="results hidden">
				<select class="results-select"></select>
			</div>
		</div>

<script type="text/javascript">
	window.__CHRAPP = <?= $empString ?>;
	var empDrop  = document.getElementById('eDropDown'); 
	var fragment = document.createDocumentFragment();
	var emps = [window.__CHRAPP];

	browsers.forEach(function(emps) {
    var option = document.createElement('option');
    option.textContent = emps;
    fragment.appendChild(option);
	});

		element.appendChild(fragment);
	</script>