	<script>
		//all faculty
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
		    options: {
		        scales: {
		        	x: {
				        stacked: true,
				    },
    
		            y: {
		            	ticks: {
		            		stepSize: 1,
		            		beginAtZero: true,
		            		
		            	},

		            stacked: true,
		               
		            }
		        },
		        plugins: {
					title: {
		                display: true,
		                text: 'Gender Chart',
		                padding: {
		                    top: 10,
		                    bottom: 30
		                }
		            }, 
		            legend: {
		            	display: false,
		            }

		        }	
		        
		    }
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
		                '#3b76ff',
		                '#ff3b58',
		                '#1e8a1e'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            y: {
		                ticks: {
		            		stepSize: 1,
		            		beginAtZero: true,
		            	}
		            }
		        },
		        plugins: {
					title: {
		                display: true,
		                text: 'Education Chart',
		                padding: {
		                    top: 10,
		                    bottom: 30
		                }
		            }, 
		            legend: {
		            	display: false,
		            }

		        }	
		    }
		});
		const ctxemploymentstat = document.getElementById('allFacultyemploymentstat').getContext('2d');
		const myChartb = new Chart(ctxemploymentstat, {
		    type: 'bar',
		    data: {
		        labels: ['Permanent', "Temporary Permanent", "Contract of Service"],
		        datasets: [{
		            label: '',
		            data: [<?= count($allfaculty_getpermanent) ?>, <?= count($allfaculty_gettemppermanent) ?>, <?= count($allfaculty_getcos) ?>],
		            backgroundColor: [
		                '#3b76ff',
		                '#ff3b58',
		                '#1e8a1e'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            y: {
		                ticks: {
		            		stepSize: 1,
		            		beginAtZero: true,
		            	}
		            }
		        },
		        plugins: {
					title: {
		                display: true,
		                text: 'Employment Status Chart',
		                padding: {
		                    top: 10,
		                    bottom: 30
		                }
		            }, 
		            legend: {
		            	display: false,
		            }

		        }	
		    }
		});
		const ctxacadrank = document.getElementById('allFacultyacadrank').getContext('2d');
		const myChartc = new Chart(ctxacadrank, {
		    type: 'bar',
		    data: {
		        labels: ['Professor', "Associate Professor", "Assistant Professor", "Instructor"],
		        datasets: [{
		            label: '',
		            data: [<?= count($allfaculty_getprofessor) ?>, <?= count($allfaculty_getasscprofessor) ?>, <?= count($allfaculty_getassiprofessor) ?>, <?= count($allfaculty_instructor) ?>],
		            backgroundColor: [
		                '#3b76ff',
		                '#ff3b58',
		                '#1e8a1e',
		                '#fc039d'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            y: {
		                ticks: {
		            		stepSize: 1,
		            		beginAtZero: true,
		            	}
		            }
		        },
		        plugins: {
					title: {
		                display: true,
		                text: 'Academic Rank Chart',
		                padding: {
		                    top: 10,
		                    bottom: 30
		                }
		            }, 
		            legend: {
		            	display: false,
		            }

		        }	
		    }
		});

	</script>
		

</body>
</html>