var optionsProfileVisit = {
	annotations: {
		position: 'back'
	},
	dataLabels: {
		enabled:false
	},
	chart: {
		type: 'bar',
		height: 300
	},
	fill: {
		opacity:1
	},
	plotOptions: {
	},
	series: [{
		name: 'sales',
		data: [9,20,30,20,10,20,30,20,10,20,30,20]
	}],
	colors: '#435ebe',
	xaxis: {
		categories: ["Jan","Feb","Mar","Apr","May","Jun","Jul", "Aug","Sep","Oct","Nov","Dec"],
	},
}
let optionsVisitorsProfile  = {
	series: [70, 30],
	labels: ['Male', 'Female'],
	colors: ['#435ebe','#55c6e8'],
	chart: {
		type: 'donut',
		width: '100%',
		height:'350px'
	},
	legend: {
		position: 'bottom'
	},
	plotOptions: {
		pie: {
			donut: {
				size: '30%'
			}
		}
	}
}

var optionsEurope = {
	series: [{
		name: 'series1',
		data: [310, 800, 600, 430, 540, 340, 605, 805,430, 540, 340, 605]
	}],
	chart: {
		height: 80,
		type: 'area',
		toolbar: {
			show:false,
		},
	},
	colors: ['#5350e9'],
	stroke: {
		width: 2,
	},
	grid: {
		show:false,
	},
	dataLabels: {
		enabled: false
	},
	xaxis: {
		type: 'datetime',
		categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z","2018-09-19T07:30:00.000Z","2018-09-19T08:30:00.000Z","2018-09-19T09:30:00.000Z","2018-09-19T10:30:00.000Z","2018-09-19T11:30:00.000Z"],
		axisBorder: {
			show:false
		},
		axisTicks: {
			show:false
		},
		labels: {
			show:false,
		}
	},
	show:false,
	yaxis: {
		labels: {
			show:false,
		},
	},
	tooltip: {
		x: {
			format: 'dd/MM/yy HH:mm'
		},
	},
};

let optionsAmerica = {
	...optionsEurope,
	colors: ['#008b75'],
}
let optionsIndonesia = {
	...optionsEurope,
	colors: ['#dc3545'],
}
var url = window.location.href;
    var absoluto = url.split("/")[url.split("/").length - 1];
	var lista = null;
    switch (absoluto) {
    	case 'admin':
        	lista = document.querySelector('#admin');
            lista.classList.add('active');
            break;
        case 'pacientes':
            lista = document.querySelector('#pacientes');
            lista.classList.add('active');
            break;
        case 'laboratorios':
            lista = document.querySelector('#labs');
            lista.classList.add('active');
            break;
        case 'calendario':
        	lista = document.querySelector('#segunda-dose');
            lista.classList.add('active');
            break;
}
		
$('#customFile')[0].addEventListener("change", function(){
	$('#archives').html($('#customFile').val().replace(/C:\\fakepath\\/i, ''));
});

(function () {
'use strict'

// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.querySelectorAll('.needs-validation')

// Loop over them and prevent submission
Array.prototype.slice.call(forms)
.forEach(function (form) {
  form.addEventListener('submit', function (event) {
	if (!form.checkValidity()) {
	  event.preventDefault()
	  event.stopPropagation()
	}
	form.classList.add('was-validated')
  }, false)
})
})();

$("#cnpj").blur(function () {
	var cnpj = $(this).val().replace(/\D/g, '');
	$.getJSON("http://www.receitaws.com.br/v1/cnpj/" + cnpj + "?callback=?", function (dados) {
		$('#dados').delay(2000).html('Razão Social: '+dados.nome+'<br>'+'Nome Fantasia: '+dados.fantasia+'<br>'+'Logradouro: '+dados.logradouro+'<br>'+'Bairro: '+dados.bairro+', '+dados.numero+'<br>'+'Local: '+dados.municipio+', '+dados.uf+'<br> Contato: '+dados.telefone).addClass('line typing-animation');
		$('#razao_social').val(dados.nome);
		$('#nome_fantasia').val(dados.fantasia);
		$('#logradouro').val(dados.logradouro);
		$('#numero').val(dados.numero);
		$('#bairro').val(dados.bairro);
		$('#cidade').val(dados.municipio);
		$('#uf').val(dados.uf);
		$('#contato').val(dados.telefone);

		$('#btn-cad-lab').removeAttribute(disabled);
	});
});