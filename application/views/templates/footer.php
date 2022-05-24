	<script>
		const ctx = document.getElementById('allFacultygender').getContext('2d');
		const myChart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: ['Male', 'Female'],
		        datasets: [{
		            label: '',
		            data: [<?= count($allfaculty_male) ?>, <?= count($allfaculty_female) ?>],
		            backgroundColor: [
		                '#3b76ff',
		                '#ff3b58'
		            ],
		            borderColor: [
		                '#002885',
		                '#7a0012'
		            ],
		            borderWidth: 1
		        }]
		    },
		   
		});
		const ctxeducation = document.getElementById('allFacultyeducation').getContext('2d');
		const myCharta = new Chart(ctxeducation, {
		    type: 'bar',
		    data: {
		        labels: ['Doctorate', "Master's", "Bachelor's"],
		        datasets: [{
		            label: '',
		            data: [<?= count($allfaculty_getdoctorate) ?>, <?= count($allfaculty_getmaster) ?>, <?= count($allfaculty_male) ?>],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255, 99, 132, 1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            y: {
		                beginAtZero: true
		            }
		        }
		    }
		});

	</script>
		

</body>
</html>