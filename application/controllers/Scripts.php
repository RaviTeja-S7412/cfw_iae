<?php
defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Scripts extends CI_Controller {

	public function insertSubcat() {

		$arr = 
			array(
				0 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics – I
(Calculus and Differential Equations)',
					'credits' => '4',
				),
				1 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics
(Waves and Optics, and Introduction to Quantum Mechanics)',
					'credits' => '5.5',
				),
				2 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics – II
(Linear Algebra, Transform Calculus and Numerical Methods)',
					'credits' => '4',
				),
				3 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Chemistry – I',
					'credits' => '5.5',
				),
				4 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics – III
(Probability and Statistics)',
					'credits' => '4',
				),
				5 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Biology – I',
					'credits' => '3',
				),
				6 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'English',
					'credits' => '3',
				),
				7 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'credits' => '3',
				),
				8 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'credits' => '3',
				),
				9 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'credits' => '3',
				),
				10 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Programming for Problem Solving',
					'credits' => '5',
				),
				11 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Workshop/Manufacturing Practices',
					'credits' => '3',
				),
				12 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Engineering Graphics',
					'credits' => '3',
				),
				13 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Basic Electrical Engineering',
					'credits' => '5',
				),
				14 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Engineering Mechanics',
					'credits' => '4',
				),
				15 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Electrical Circuit Analysis',
					'credits' => '4',
				),
				16 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Analog Electronics',
					'credits' => '3',
				),
				17 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Analog Electronics Laboratory',
					'credits' => '1',
				),
				18 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Electrical Machines – I',
					'credits' => '3',
				),
				19 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Electrical Machines Laboratory - I',
					'credits' => '1',
				),
				20 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Electromagnetic Fields',
					'credits' => '4',
				),
				21 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Digital Electronics',
					'credits' => '3',
				),
				22 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Digital Electronics Laboratory',
					'credits' => '1',
				),
				23 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Electrical Machines – II',
					'credits' => '3',
				),
				24 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Electrical Machines Laboratory - II',
					'credits' => '1',
				),
				25 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Power Electronics',
					'credits' => '3',
				),
				26 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Power Electronics Laboratory',
					'credits' => '1',
				),
				27 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Signals and Systems',
					'credits' => '3',
				),
				28 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Power Systems -I',
					'credits' => '3',
				),
				29 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Power Systems Laboratory -I',
					'credits' => '1',
				),
				30 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Control Systems',
					'credits' => '3',
				),
				31 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Control Systems Laboratory',
					'credits' => '1',
				),
				32 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Microprocessors',
					'credits' => '3',
				),
				33 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Microprocessors Laboratory',
					'credits' => '1',
				),
				34 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Power Systems - II',
					'credits' => '3',
				),
				35 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Power Systems Laboratory - II',
					'credits' => '1',
				),
				36 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Measurements and Instrumentation Lab',
					'credits' => '3',
				),
				37 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Electronic Design Laboratory',
					'credits' => '3',
				),
				38 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Wind and Solar Energy Systems',
					'credits' => '3',
				),
				39 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Line Commutated and Active
Rectifiers',
					'credits' => '3',
				),
				40 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Electrical Drives',
					'credits' => '3',
				),
				41 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Electrical and Hybrid Vehicles',
					'credits' => '3',
				),
				42 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Electrical Machine Design',
					'credits' => '3',
				),
				43 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Power System Protection',
					'credits' => '3',
				),
				44 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'HVDC Transmission Systems',
					'credits' => '3',
				),
				45 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Power Quality and FACTS',
					'credits' => '3',
				),
				46 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'High Voltage Engineering',
					'credits' => '3',
				),
				47 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Electrical Energy Conservation
and Auditing',
					'credits' => '3',
				),
				48 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Industrial Electrical Systems',
					'credits' => '3',
				),
				49 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Power System Dynamics and
Control',
					'credits' => '3',
				),
				50 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Digital Control Systems',
					'credits' => '3',
				),
				51 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Digital Signal Processing',
					'credits' => '3',
				),
				52 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Computer Architecture',
					'credits' => '3',
				),
				53 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Electromagnetic Waves',
					'credits' => '3',
				),
				54 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Computational Electromagnetics',
					'credits' => '3',
				),
				55 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Control Systems Design',
					'credits' => '3',
				),
				56 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Advanced Electric Drives',
					'credits' => '3',
				),
				57 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Electronic Devices',
					'credits' => '3',
				),
				58 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Data Structures and Algorithms',
					'credits' => '3',
				),
				59 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Analog and Digital Communication',
					'credits' => '3',
				),
				60 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Computer Networks',
					'credits' => '3',
				),
				61 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Embedded Systems',
					'credits' => '3',
				),
				62 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'VLSI circuits',
					'credits' => '3',
				),
				63 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Image Processing',
					'credits' => '3',
				),
				64 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Wavelet Transforms',
					'credits' => '3',
				),
				65 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Power Plant Engineering',
					'credits' => '3',
				),
				66 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Thermal and Fluid Engineering',
					'credits' => '3',
				),
				67 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Strength of Materials',
					'credits' => '3',
				),
				68 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Fluid Machinery',
					'credits' => '3',
				),
				69 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Automobile Engineering',
					'credits' => '3',
				),
				70 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Electrical Materials',
					'credits' => '3',
				),
				71 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Modern Manufacturing Processes',
					'credits' => '3',
				),
				72 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Internet of Things',
					'credits' => '3',
				),
				73 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Big Data Analysis',
					'credits' => '3',
				),
				74 =>
				array(
					'subject_category' => 'Project (Electrical Engineering)',
					'Subject' => 'Project Stage-I',
					'credits' => '3',
				),
				75 =>
				array(
					'subject_category' => 'Project (Electrical Engineering)',
					'Subject' => 'Project Stage-II',
					'credits' => '8',
				),
				76 =>
				array(
					'subject_category' => 'Mandatory courses',
					'Subject' => '[Environmental Sciences,
Induction Program, NSS/NCC]',
					'credits' => 'Nil',
				),
				77 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Biology',
					'credits' => '6',
				),
				78 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Calculus',
					'credits' => '8',
				),
				79 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Quantum Physics and Applications',
					'credits' => '6',
				),
				80 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Organic-Inorganic Chemistry*',
					'credits' => '4',
				),
				81 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physical Chemistry*',
					'credits' => '4',
				),
				82 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Workshop Practice',
					'credits' => '4',
				),
				83 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics Lab/Chemistry Lab',
					'credits' => '3',
				),
				84 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Introduction to Electrical Engineering Practice (DIC-1)',
					'credits' => '6',
				),
				85 =>
				array(
					'subject_category' => 'Mandatory courses',
					'Subject' => 'National Cadet Corps (NCC)',
				),
				86 =>
				array(
					'subject_category' => 'Mandatory courses',
					'Subject' => 'National Sports Organisation (NSS)',
				),
				87 =>
				array(
					'subject_category' => 'Mandatory courses',
					'Subject' => 'National Service Scheme (NSS)',
				),
				88 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Linear Algebra',
					'credits' => '4',
				),
				89 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Ordinary Differential Equations 1',
					'credits' => '4',
				),
				90 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Basics of Electricity & Magnetism',
					'credits' => '6',
				),
				91 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics Lab/Chemistry Lab',
					'credits' => '3',
				),
				92 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Computer Programming and Utilization',
					'credits' => '6',
				),
				93 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Engineering Graphics and Drawing',
					'credits' => '5',
				),
				94 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Power Engineering- I',
					'credits' => '6',
				),
				95 =>
				array(
					'subject_category' => 'Mandatory courses',
					'Subject' => 'National Cadet Corps (NCC)',
				),
				96 =>
				array(
					'subject_category' => 'Mandatory courses',
					'Subject' => 'National Sports Organisation (NSS)',
				),
				97 =>
				array(
					'subject_category' => 'Mandatory courses',
					'Subject' => 'National Service Scheme (NSS)',
				),
				98 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics II',
					'credits' => '4',
				),
				99 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => '(Complex Analysis + DE II)',
					'credits' => '4',
				),
				100 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Economics',
					'credits' => '6',
				),
				101 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Analog Circuits',
					'credits' => '6',
				),
				102 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Digital Systems',
					'credits' => '6',
				),
				103 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Digital Systems lab',
					'credits' => '3',
				),
				104 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Probability and Random Processes',
					'credits' => '6',
				),
				105 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Signal Processing – I',
					'credits' => '6',
				),
				106 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Analog Circuits lab',
					'credits' => '3',
				),
				107 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Microprocessors',
					'credits' => '6',
				),
				108 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Microprocessors lab',
					'credits' => '3',
				),
				109 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Electronic Devices',
					'credits' => '6',
				),
				110 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Control Systems',
					'credits' => '6',
				),
				111 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Power Engineering – II',
					'credits' => '6',
				),
				112 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Power Engineering lab',
					'credits' => '3',
				),
				113 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Honors Elective 1',
					'credits' => '6',
				),
				114 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Honors Elective E2',
					'credits' => '6',
				),
				115 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'HSS Elective',
					'credits' => '6',
				),
				116 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Communication Systems - I',
					'credits' => '6',
				),
				117 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'EM Waves',
					'credits' => '6',
				),
				118 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Communications Lab',
					'credits' => '3',
				),
				119 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Dept. Elective I',
					'credits' => '6',
				),
				120 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Control Systems lab',
					'credits' => '3',
				),
				121 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Electronic Devices lab',
					'credits' => '3',
				),
				122 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Honors Elective E3',
					'credits' => '6',
				),
				123 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Electronics Design Lab',
					'credits' => '6',
				),
				124 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Dept. Elective II',
					'credits' => '6',
				),
				125 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Dept. Elective III',
					'credits' => '6',
				),
				126 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Dept. Elective IV',
					'credits' => '6',
				),
				127 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Technical Communication',
					'credits' => '6',
				),
				128 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Honors Elective E4',
					'credits' => '6',
				),
				129 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Environment Studies',
					'credits' => '6',
				),
				130 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Environment Studies',
				),
				131 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Institute Elective I',
					'credits' => '6',
				),
				132 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Dept. Elective V',
					'credits' => '6',
				),
				133 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Dept. Elective VI',
					'credits' => '6',
				),
				134 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'BTP-I',
					'credits' => '6',
				),
				135 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Institute Elective II',
					'credits' => '6',
				),
				136 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Dept. Elective VII/Open Elective',
					'credits' => '6',
				),
				137 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Dept. Elective VIII',
					'credits' => '6',
				),
				138 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => '& Dept. Elective IX',
					'credits' => '6',
				),
				139 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'BTP-II',
					'credits' => '12',
				),
				140 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Functions of Several Variables',
					'credits' => '10',
				),
				141 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics I',
					'credits' => '10',
				),
				142 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Chemistry I',
					'credits' => '10',
				),
				143 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Introduction to Programming',
					'credits' => '12',
				),
				144 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics Lab I',
					'credits' => '4',
				),
				145 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Chemistry Lab',
					'credits' => '3',
				),
				146 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Ecology and Environment',
					'credits' => '0',
				),
				147 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Life Skills I',
					'credits' => '0',
				),
				148 =>
				array(
					'subject_category' => 'Mandatory courses',
					'Subject' => 'NCC (NC1010)/NSO (NS1020)/NSO(NS1030)',
					'credits' => '0',
				),
				149 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Workshop I',
					'credits' => '3',
				),
				150 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Series and Matrices',
					'credits' => '10',
				),
				151 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics II',
					'credits' => '10',
				),
				152 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Digital Systems & Lab',
					'credits' => '16',
				),
				153 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Signals & Systems',
					'credits' => '10',
				),
				154 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Humanities 1',
					'credits' => '9',
				),
				155 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Life Skills II',
					'credits' => '0',
				),
				156 =>
				array(
					'subject_category' => 'Mandatory courses',
					'Subject' => 'NCC (NC1010)/NSO (NS1020)/NSO(NS1030)',
					'credits' => '0',
				),
				157 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Workshop II',
					'credits' => '3',
				),
				158 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Electric Circuits & Networks',
					'credits' => '11',
				),
				159 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Microprocessor Theory + Lab',
					'credits' => '12',
				),
				160 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Engineering Electromagnetics',
					'credits' => '10',
				),
				161 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Humanities 2',
					'credits' => '9',
				),
				162 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Electrical Machines & Lab',
					'credits' => '15',
				),
				163 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Analog Systems & Lab',
					'credits' => '17',
				),
				164 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Digital Signal Processing',
					'credits' => '11',
				),
				165 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Solid State Devices',
					'credits' => '11',
				),
				166 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Applied Programming Lab',
					'credits' => '6',
				),
				167 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Control Engg',
					'credits' => '11',
				),
				168 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Principles of Measurement',
					'credits' => '8',
				),
				169 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'Life sciences',
					'credits' => '9',
				),
				170 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Basic Thermal Engineering',
					'credits' => '10',
				),
				171 =>
				array(
					'subject_category' => 'Summer Industry Internship / Internship',
					'Subject' => 'Summer internship',
					'credits' => '20',
				),
				172 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Humanities Elective 3',
					'credits' => '9',
				),
				173 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Professional Ethics',
					'credits' => '0',
				),
				174 =>
				array(
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-I',
					'credits' => '0',
				),
				175 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'PHYSICS',
					'credits' => '4',
				),
				176 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'PHYSICS LAB.',
					'credits' => '2',
				),
				177 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'PROGRAMMING AND DATA STRUCTURES TUTORIAL AND LABORATORY',
					'credits' => '3',
				),
				178 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'ENGLISH FOR COMMUNICATION',
					'credits' => '4',
				),
				179 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'ENGINEERING DRAWING AND COMPUTER GRAPHICS',
					'credits' => '3',
				),
				180 =>
				array(
					'subject_category' => 'Professional core course (Electrical Engineering)',
					'Subject' => 'PROGRAMMING AND DATA STRUCTURES',
					'credits' => '3',
				),
				181 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'MATHEMATICS-I',
					'credits' => '4',
				),
				182 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'ELECTRICAL TECHNOLOGY LAB.',
					'credits' => '2',
				),
				183 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'INTRODUCTION TO MANUFACTURING PROCESSES',
					'credits' => '2',
				),
				184 =>
				array(
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-II',
					'credits' => '0',
				),
				185 =>
				array(
					'Subject' => 'INDUCTION PROGRAM',
					'credits' => '0',
				),
				186 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'MATHEMATICS-II',
					'credits' => '4',
				),
				187 =>
				array(
					'Subject' => 'ELECTRICAL TECHNOLOGY',
					'credits' => '4',
				),
				188 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'CHEMISTRY LAB.',
					'credits' => '2',
				),
				189 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'CHEMISTRY',
					'credits' => '4',
				),
				190 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'MECHANICS',
					'credits' => '4',
				),
				191 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'DISCRETE STRUCTURES',
					'credits' => '4',
				),
				192 =>
				array(
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-III',
					'credits' => '0',
				),
				193 =>
				array(
					'Subject' => 'INTRODUCTION TO ELECTRONICS LAB.',
					'credits' => '2',
				),
				194 =>
				array(
					'Subject' => 'INTRODUCTION TO ELECTRONICS',
					'credits' => '4',
				),
				195 =>
				array(
					'Subject' => 'SIGNALS AND NETWORKS LAB.',
					'credits' => '2',
				),
				196 =>
				array(
					'Subject' => 'ALGORITHMS - I',
					'credits' => '4',
				),
				197 =>
				array(
					'Subject' => 'ALGORITHMS LABORATORY',
					'credits' => '2',
				),
				198 =>
				array(
					'Subject' => 'SIGNALS AND NETWORKS',
					'credits' => '4',
				),
				199 =>
				array(
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-IV',
					'credits' => '0',
				),
				200 =>
				array(
					'Subject' => 'FORMAL LANGUAGE AND AUTOMATA THEORY',
					'credits' => '4',
				),
				201 =>
				array(
					'Subject' => 'SWITCHING CIRCUITS LABORATORY',
					'credits' => '2',
				),
				202 =>
				array(
					'Subject' => 'SOFTWARE ENGINEERING LABORATORY',
					'credits' => '2',
				),
				203 =>
				array(
					'Subject' => 'PROBABILITY AND STATISTICS',
					'credits' => '3',
				),
				204 =>
				array(
					'Subject' => 'SOFTWARE ENGINEERING',
					'credits' => '3',
				),
				205 =>
				array(
					'Subject' => 'SWITCHING CIRCUITS AND LOGIC DESIGN',
					'credits' => '4',
				),
				206 =>
				array(
					'Subject' => 'COMPUTER ORGANIZATION LABORATORY',
					'credits' => '4',
				),
				207 =>
				array(
					'Subject' => 'ALGORITHMS -II',
					'credits' => '4',
				),
				208 =>
				array(
					'Subject' => 'COMPILERS LABORATORY',
					'credits' => '2',
				),
				209 =>
				array(
					'Subject' => 'COMPILERS',
					'credits' => '3',
				),
				210 =>
				array(
					'Subject' => 'COMPUTER ORGANIZATION AND ARCHITECTURE',
					'credits' => '4',
				),
				211 =>
				array(
					'Subject' => 'OPERATING SYSTEMS',
					'credits' => '3',
				),
				212 =>
				array(
					'Subject' => 'NETWORKS LAB.',
					'credits' => '2',
				),
				213 =>
				array(
					'Subject' => 'ENVIRONMENTAL SCIENCE',
					'credits' => '2',
				),
				214 =>
				array(
					'Subject' => 'OPERATING SYSTEMS LABORATORY',
					'credits' => '2',
				),
				215 =>
				array(
					'Subject' => 'COMPUTER NETWORKS',
					'credits' => '3',
				),
				216 =>
				array(
					'Subject' => 'SCIENCE OF LIVING SYSTEM',
					'credits' => '2',
				),
				217 =>
				array(
					'Subject' => 'PROJECT SEMINAR',
					'credits' => '2',
				),
				218 =>
				array(
					'Subject' => 'SUMMER TRAINING',
					'credits' => '2',
				),
				219 =>
				array(
					'Subject' => 'THEORY OF COMPUTATION',
					'credits' => '4',
				),
				220 =>
				array(
					'Subject' => 'COMPREHENSIVE VIVA',
					'credits' => '2',
				),
				221 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics - I',
					'credits' => '5',
				),
				222 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Chemistry - I',
					'credits' => '3',
				),
				223 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Introduction to Electrical Engineering',
					'credits' => '4',
				),
				224 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Engineering Drawing',
					'credits' => '1.5',
				),
				225 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Earth and Environmental Sciences',
					'credits' => '2',
				),
				226 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Thermodynamics',
					'credits' => '3',
				),
				227 =>
				array(
					'Subject' => 'Media Project',
					'credits' => '1.5',
				),
				228 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'English and Humanities - I',
					'credits' => '4',
				),
				229 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'French language & Culture - I',
					'credits' => '0',
				),
				230 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics - II',
					'credits' => '4',
				),
				231 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics - I',
					'credits' => '4',
				),
				232 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Chemistry - II',
					'credits' => '3',
				),
				233 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Electronics',
					'credits' => '4',
				),
				234 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Introduction to Computer Science',
					'credits' => '4',
				),
				235 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Workshop Practice',
					'credits' => '0',
				),
				236 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Introduction to Enterprise & Economy',
					'credits' => '3',
				),
				237 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Professional Ethics',
					'credits' => '1',
				),
				238 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'French language & Culture - II',
					'credits' => '0',
				),
				239 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics - III',
					'credits' => '4',
				),
				240 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics - II',
					'credits' => '5',
				),
				241 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Mechanics',
					'credits' => '3',
				),
				242 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Signals & Systems',
					'credits' => '4',
				),
				243 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Data Structures',
					'credits' => '5',
				),
				244 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Electromechanical Energy Conversion',
					'credits' => '4',
				),
				245 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'French language & Culture - III',
					'credits' => '0',
				),
				246 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Numerical Methods',
					'credits' => '4',
				),
				247 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Digital Electronics',
					'credits' => '4',
				),
				248 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Linear Electronics',
					'credits' => '5',
				),
				249 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Digital Signal Processing',
					'credits' => '4',
				),
				250 =>
				array(
					'subject_category' => 'Engineering Science Course (Electrical Engineering)',
					'Subject' => 'Electromagnetic Waves',
					'credits' => '4',
				),
				251 =>
				array(
					'Subject' => 'Design Thinking',
					'credits' => '2',
				),
				252 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'French Language & Culture - IV',
					'credits' => '0',
				),
				253 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics - IV',
					'credits' => '4',
				),
				254 =>
				array(
					'Subject' => 'Basic and Modern Control Systems',
					'credits' => '3',
				),
				255 =>
				array(
					'Subject' => 'Microprocessors and Microcontrollers',
					'credits' => '4',
				),
				256 =>
				array(
					'Subject' => 'Communication Theory I',
					'credits' => '4',
				),
				257 =>
				array(
					'Subject' => 'Network Synthesis and Filter Design',
					'credits' => '3',
				),
				258 =>
				array(
					'Subject' => 'Power Electronics',
					'credits' => '4',
				),
				259 =>
				array(
					'Subject' => 'Experimental Lab I',
					'credits' => '1',
				),
				260 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'HSS + Mgmt. - Elective – I',
					'credits' => '2',
				),
				261 =>
				array(
					'Subject' => 'French Language & Culture - V',
					'credits' => '0',
				),
				262 =>
				array(
					'Subject' => 'Communication Theory II',
					'credits' => '4',
				),
				263 =>
				array(
					'Subject' => 'Computer Architecture and Design',
					'credits' => '3',
				),
				264 =>
				array(
					'Subject' => 'Power Systems',
					'credits' => '3',
				),
				265 =>
				array(
					'Subject' => 'VLSI Design',
					'credits' => '3',
				),
				266 =>
				array(
					'Subject' => 'Experimental Lab II',
					'credits' => '1',
				),
				267 =>
				array(
					'Subject' => 'Third Year Team Project (Embedded Hardware Project)',
					'credits' => '3',
				),
				268 =>
				array(
					'Subject' => 'Elective - I',
					'credits' => '3',
				),
				269 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'HSS + Mgmt. - Elective – II',
					'credits' => '2',
				),
				270 =>
				array(
					'Subject' => 'French Language & Culture - VI',
					'credits' => '0',
				),
				271 =>
				array(
					'Subject' => 'Computer & Communication Networks',
					'credits' => '3',
				),
				272 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'HSS + Mgmt. - Elective - II',
					'credits' => '2',
				),
				273 =>
				array(
					'Subject' => 'Elective – II',
					'credits' => '3',
				),
				274 =>
				array(
					'Subject' => 'Elective – III',
					'credits' => '3',
				),
				275 =>
				array(
					'Subject' => 'Year-4 Project I',
					'credits' => '3',
				),
				276 =>
				array(
					'Subject' => 'French Language & Culture - VII',
					'credits' => '0',
				),
				277 =>
				array(
					'Subject' => 'Elective – IV',
					'credits' => '3',
				),
				278 =>
				array(
					'Subject' => 'Elective – V',
					'credits' => '3',
				),
				279 =>
				array(
					'subject_category' => 'Project (Electrical Engineering)',
					'Subject' => 'Year-4 Project II',
					'credits' => '9',
				),
				280 =>
				array(
					'Subject' => 'French Language & Culture -VIII',
					'credits' => '0',
				),
				281 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Information Theory and Coding',
					'credits' => '3',
				),
				282 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Wireless Sensor Networks',
					'credits' => '3',
				),
				283 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Mobile Communication',
					'credits' => '3',
				),
				284 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Wireless Communication',
					'credits' => '3',
				),
				285 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Radar Systems and Signal Processing',
					'credits' => '3',
				),
				286 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Channel Coding Theory',
					'credits' => '3',
				),
				287 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Software Defined Radio',
					'credits' => '3',
				),
				288 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Advanced Communication Systems',
					'credits' => '3',
				),
				289 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Optical Communication',
					'credits' => '3',
				),
				290 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Design for Testability',
					'credits' => '3',
				),
				291 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Solid State Devices',
					'credits' => '3',
				),
				292 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'VLSI Testing and Verification',
					'credits' => '3',
				),
				293 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'VLSI Signal Processing',
					'credits' => '3',
				),
				294 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'CAD for VLSI',
					'credits' => '3',
				),
				295 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Passive Components in VLSI',
					'credits' => '3',
				),
				296 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'RFIC Design',
					'credits' => '3',
				),
				297 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Low Power VLSI Design',
					'credits' => '3',
				),
				298 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'High Speed IC Design',
					'credits' => '3',
				),
				299 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Advanced VLSI Design',
					'credits' => '3',
				),
				300 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Adaptive signal Processing',
					'credits' => '3',
				),
				301 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Digital Image Processing',
					'credits' => '3',
				),
				302 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Computer Vision',
					'credits' => '3',
				),
				303 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Advanced DSP',
					'credits' => '3',
				),
				304 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Signal Processing for Remote Sensing Applications',
					'credits' => '3',
				),
				305 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Biomedical Signal Processing',
					'credits' => '3',
				),
				306 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Microwave Engineering',
					'credits' => '3',
				),
				307 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Computational Electromagnetics',
					'credits' => '3',
				),
				308 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Advanced Antennas',
					'credits' => '3',
				),
				309 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Signal Integrity',
					'credits' => '3',
				),
				310 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Neuroscience and Anatomy',
					'credits' => '3',
				),
				311 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Neural Networks and Sensors',
					'credits' => '3',
				),
				312 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Signal Processing in Neural Systems',
					'credits' => '3',
				),
				313 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Brain Modelling and ANN',
					'credits' => '3',
				),
				314 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Advanced Microprocessors',
					'credits' => '3',
				),
				315 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'IoT System Architecture and Design',
					'credits' => '3',
				),
				316 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Sensors and Instrumentation',
					'credits' => '3',
				),
				317 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'High Performance Embedded Systems',
					'credits' => '3',
				),
				318 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Renewable Energy Sources',
					'credits' => '3',
				),
				319 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'DC and AC Microgrids',
					'credits' => '3',
				),
				320 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Advanced Electric Drives',
					'credits' => '3',
				),
				321 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Advanced Power Electronics',
					'credits' => '3',
				),
				322 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Advanced Power Systems',
					'credits' => '3',
				),
				323 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Control for Power Electronics',
					'credits' => '3',
				),
				324 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Digital Control of Power Electronics and Electric Drives',
					'credits' => '3',
				),
				325 =>
				array(
					'subject_category' => 'Professional Elective course (Electrical Engineering)',
					'Subject' => 'Switchgear and Protection',
					'credits' => '3',
				),
				326 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Machine Learning',
					'credits' => '3',
				),
				327 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Embedded Systems',
					'credits' => '3',
				),
				328 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Big Data',
					'credits' => '3',
				),
				329 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Mobile Communication and Computing',
					'credits' => '3',
				),
				330 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'VLSI Design Using Verilog',
					'credits' => '3',
				),
				331 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Cryptography and Information Security',
					'credits' => '3',
				),
				332 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Deep Learning',
					'credits' => '3',
				),
				333 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Information Retreival and NLP',
					'credits' => '3',
				),
				334 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Cloud Computing',
					'credits' => '3',
				),
				335 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Object Oriented Programming',
					'credits' => '3',
				),
				336 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'High Performance Computing',
					'credits' => '3',
				),
				337 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Introduction to Operations Research',
					'credits' => '3',
				),
				338 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Alternative Energy Sources',
					'credits' => '3',
				),
				339 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Introduction to Robotics',
					'credits' => '3',
				),
				340 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Computational Fluid Dynamics',
					'credits' => '3',
				),
				341 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Robotics: Dynamics and Control',
					'credits' => '3',
				),
				342 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Numerical Linear Algebra',
					'credits' => '3',
				),
				343 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Meshfree Methods',
					'credits' => '3',
				),
				344 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Boundary Element Method and Boundary Integral Equations',
					'credits' => '3',
				),
				345 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'PDE Based Image Processing',
					'credits' => '3',
				),
				346 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Topology and Operator Theory',
					'credits' => '3',
				),
				347 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Infinite dimensional Control Theory',
					'credits' => '3',
				),
				348 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Bayesian Statistics',
					'credits' => '3',
				),
				349 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Financial Mathematics',
					'credits' => '3',
				),
				350 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Non-linear Conservation Laws and Applications',
					'credits' => '3',
				),
				351 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Electric Vehicles',
					'credits' => '3',
				),
				352 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'VLSI Technology',
					'credits' => '3',
				),
				353 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Selections from World Literature',
					'credits' => '2',
				),
				354 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Business Communication',
					'credits' => '2',
				),
				355 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Visual Story Telling',
					'credits' => '2',
				),
				356 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Introduction to Culture Studies',
					'credits' => '2',
				),
				357 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Literature and Visual Arts',
					'credits' => '2',
				),
				358 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Cinema and Philosophy',
					'credits' => '2',
				),
				359 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'The Humanities for a Critical Understanding of the World',
					'credits' => '2',
				),
				360 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Academic Writing',
					'credits' => '2',
				),
				361 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Urban Studies: Reading the City',
					'credits' => '2',
				),
				362 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Contemporary Shakespeare: Readings and Adaptations',
					'credits' => '2',
				),
				363 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Philosophical Arguments',
					'credits' => '2',
				),
				364 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Advertising',
					'credits' => '2',
				),
				365 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Organizational Behavior',
					'credits' => '2',
				),
				366 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Green Buildings',
					'credits' => '2',
				),
				367 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Fundamentals Of Scripting Language',
					'credits' => '2',
				),
				368 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Cyber Security',
					'credits' => '2',
				),
				369 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Basics Of Electronic Communication',
					'credits' => '2',
				),
				370 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Non Conventional Energy Sources',
					'credits' => '2',
				),
				371 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Fundamentals of Data Structures',
					'credits' => '2',
				),
				372 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Introduction to Linux',
					'credits' => '2',
				),
				373 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Geometric Modelling',
					'credits' => '2',
				),
				374 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Basic Heat Transfer For Electronic Systems',
					'credits' => '2',
				),
				375 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Linear Algebra And Its Applications',
					'credits' => '2',
				),
				376 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Battery science and Technology',
					'credits' => '2',
				),
				377 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Corrosion science and it’s application',
					'credits' => '2',
				),
				378 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Smart Materials & Applications',
					'credits' => '2',
				),
				379 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Disaster Management',
					'credits' => '3',
				),
				380 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Introduction To Software Engineering',
					'credits' => '3',
				),
				381 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'introduction to data Structures',
					'credits' => '3',
				),
				382 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Mathematical Programming for Engineers',
					'credits' => '3',
				),
				383 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Introduction to Communication Systems',
					'credits' => '3',
				),
				384 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Introduction to Object Oriented Programming',
					'credits' => '3',
				),
				385 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Introduction to Scripting Languages',
					'credits' => '3',
				),
				386 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Optimization Methods',
					'credits' => '3',
				),
				387 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Critical Thinking',
					'credits' => '3',
				),
				388 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Spatial Information Technology',
					'credits' => '3',
				),
				389 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Fundamentals Of Object Oriented Programming',
					'credits' => '3',
				),
				390 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Web Design',
					'credits' => '3',
				),
				391 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Sensors For Engineering Applications',
					'credits' => '3',
				),
				392 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Solar Power and applications',
					'credits' => '3',
				),
				393 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Introduction To Database Management Systems',
					'credits' => '3',
				),
				394 =>
				array(
					'subject_category' => 'Open Elective course (Electrical Engineering)',
					'Subject' => 'Introduction To Statistical Programming',
					'credits' => '3',
				),
				395 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Introduction To Robotics',
					'credits' => '3',
				),
				396 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Introduction To Automobile Engineering',
					'credits' => '3',
				),
				397 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Advanced Course Entrepreneurship',
					'credits' => '3',
				),
				398 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Discrete Mathematics for Engineers',
					'credits' => '3',
				),
				399 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Technical Writing and Professional Presentations',
					'credits' => '3',
				),
				400 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Project Management',
					'credits' => '3',
				),
				401 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Introduction To Databases',
					'credits' => '3',
				),
				402 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Introduction To Operating Systems',
					'credits' => '3',
				),
				403 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Internet Of Things And Applications',
					'credits' => '3',
				),
				404 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Introduction To Mobile Communications',
					'credits' => '3',
				),
				405 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Introduction To Web Application Development',
					'credits' => '3',
				),
				406 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Introduction To Machine Learning',
					'credits' => '3',
				),
				407 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Additive Manufacturing And Its Applications',
					'credits' => '3',
				),
				408 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Industrial Administration And Financial Management',
					'credits' => '3',
				),
				409 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'English For Competitive Examinations',
					'credits' => '3',
				),
				410 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics - I',
					'credits' => '5',
				),
				411 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Chemistry - I',
					'credits' => '3',
				),
				412 =>
				array(
					'Subject' => 'Introduction to Electrical Engineering',
					'credits' => '4',
				),
				413 =>
				array(
					'Subject' => 'Engineering Drawing',
					'credits' => '1.5',
				),
				414 =>
				array(
					'Subject' => 'Earth and Environmental Sciences',
					'credits' => '2',
				),
				415 =>
				array(
					'Subject' => 'Thermodynamics',
					'credits' => '3',
				),
				416 =>
				array(
					'Subject' => 'Media Project',
					'credits' => '1.5',
				),
				417 =>
				array(
					'Subject' => 'English and Humanities - I',
					'credits' => '4',
				),
				418 =>
				array(
					'Subject' => 'French language & Culture - I',
					'credits' => '0',
				),
				419 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics - II',
					'credits' => '4',
				),
				420 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics - I',
					'credits' => '4',
				),
				421 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Chemistry - II',
					'credits' => '3',
				),
				422 =>
				array(
					'Subject' => 'Electronics',
					'credits' => '4',
				),
				423 =>
				array(
					'Subject' => 'Introduction to Computer Science',
					'credits' => '4',
				),
				424 =>
				array(
					'Subject' => 'Workshop Practice',
					'credits' => '0',
				),
				425 =>
				array(
					'Subject' => 'Introduction to Enterprise & Economy',
					'credits' => '3',
				),
				426 =>
				array(
					'Subject' => 'Professional Ethics',
					'credits' => '1',
				),
				427 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management course',
					'Subject' => 'French language & Culture - II',
					'credits' => '0',
				),
				428 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics - III',
					'credits' => '4',
				),
				429 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics - II',
					'credits' => '5',
				),
				430 =>
				array(
					'subject_category' => 'Engineering Science Course (Civil Engineering)',
					'Subject' => 'Mechanics',
					'credits' => '3',
				),
				431 =>
				array(
					'subject_category' => 'Engineering Science Course (Civil Engineering)',
					'Subject' => 'Signals & Systems',
					'credits' => '4',
				),
				432 =>
				array(
					'subject_category' => 'Engineering Science Course (Civil Engineering)',
					'Subject' => 'Data Structures',
					'credits' => '5',
				),
				433 =>
				array(
					'Subject' => 'Building Materials',
					'credits' => '2',
				),
				434 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management course',
					'Subject' => 'French language & Culture - III',
					'credits' => '0',
				),
				435 =>
				array(
					'Subject' => 'Numerical Methods',
					'credits' => '4',
				),
				436 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Mechanics of Materials',
					'credits' => '4',
				),
				437 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Engineering Surveying',
					'credits' => '3',
				),
				438 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Fluid Mechanics',
					'credits' => '4',
				),
				439 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Concrete Technology',
					'credits' => '3',
				),
				440 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Construction Technology and Drawing',
					'credits' => '3',
				),
				441 =>
				array(
					'Subject' => 'Design Thinking',
					'credits' => '2',
				),
				442 =>
				array(
					'Subject' => 'French Language & Culture - IV',
					'credits' => '0',
				),
				443 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics - IV',
					'credits' => '4',
				),
				444 =>
				array(
					'Subject' => 'Introduction to Materials Sciences',
					'credits' => '3',
				),
				445 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Computing Lab',
					'credits' => '3',
				),
				446 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Structural Analysis',
					'credits' => '4',
				),
				447 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Soil Mechanics',
					'credits' => '4',
				),
				448 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Water Resources Engineering',
					'credits' => '3',
				),
				449 =>
				array(
					'Subject' => 'HSS + Mgmt. - Elective – I',
					'credits' => '2',
				),
				450 =>
				array(
					'Subject' => 'French Language & Culture - V',
					'credits' => '0',
				),
				451 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Reinforced Concrete Design',
					'credits' => '4',
				),
				452 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Environmental Engineering',
					'credits' => '3',
				),
				453 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Transportation Engineering',
					'credits' => '4',
				),
				454 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Foundation Engineering',
					'credits' => '3',
				),
				455 =>
				array(
					'Subject' => 'Third Year Team Project',
					'credits' => '3',
				),
				456 =>
				array(
					'Subject' => 'Elective - I',
					'credits' => '3',
				),
				457 =>
				array(
					'Subject' => 'HSS + Mgmt. - Elective – II',
					'credits' => '2',
				),
				458 =>
				array(
					'Subject' => 'French Language & Culture - VI',
					'credits' => '0',
				),
				459 =>
				array(
					'Subject' => 'Design of Steel Structures',
					'credits' => '4',
				),
				460 =>
				array(
					'Subject' => 'Construction Planning and Management',
					'credits' => '2',
				),
				461 =>
				array(
					'Subject' => 'HSS + Mgmt. - Elective - III',
					'credits' => '2',
				),
				462 =>
				array(
					'Subject' => 'Elective – II',
					'credits' => '3',
				),
				463 =>
				array(
					'Subject' => 'Elective – III',
					'credits' => '3',
				),
				464 =>
				array(
					'Subject' => 'Year-4 Project I',
					'credits' => '3',
				),
				465 =>
				array(
					'Subject' => 'French Language & Culture - VII',
					'credits' => '0',
				),
				466 =>
				array(
					'Subject' => 'Elective – IV',
					'credits' => '3',
				),
				467 =>
				array(
					'Subject' => 'Elective – V',
					'credits' => '3',
				),
				468 =>
				array(
					'Subject' => 'Year-4 Project II',
					'credits' => '9',
				),
				469 =>
				array(
					'Subject' => 'French Language & Culture -VIII',
					'credits' => '0',
				),
				470 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'TE - II (Railways, Airports & Harbour Engg.)',
					'credits' => '3',
				),
				471 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Traffic Engineering and Management',
					'credits' => '3',
				),
				472 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Intelligent Transportation Systems',
					'credits' => '3',
				),
				473 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Pavement Analysis and Design',
					'credits' => '3',
				),
				474 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Transport and Environment',
					'credits' => '3',
				),
				475 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Urban Transportation Planning',
					'credits' => '3',
				),
				476 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Pavement Material Characterization and construction',
					'credits' => '3',
				),
				477 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Airport Planning and Design',
					'credits' => '3',
				),
				478 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Advanced Foundation Engineering',
					'credits' => '3',
				),
				479 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Advanced Soil Mechanics',
					'credits' => '3',
				),
				480 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Environmental Geotechnics',
					'credits' => '3',
				),
				481 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Geosynthetics and Reinforced Soil Structures',
					'credits' => '3',
				),
				482 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Geotechnical Earthquake Engineering',
					'credits' => '3',
				),
				483 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Ground Improvement Techniques',
					'credits' => '3',
				),
				484 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Risk assessment and Management in Geotech. Engg.',
					'credits' => '3',
				),
				485 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Rock Mechanics',
					'credits' => '3',
				),
				486 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Soil Dynamics and Machine Foundations',
					'credits' => '3',
				),
				487 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Soil-Structure Interaction',
					'credits' => '3',
				),
				488 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Introduction to Continnum Mechanics',
					'credits' => '3',
				),
				489 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Introduction to Finite Element Analysis',
					'credits' => '3',
				),
				490 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Introduction to Fracture Mechanics',
					'credits' => '3',
				),
				491 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Introduction to Structural Health Monitoring',
					'credits' => '3',
				),
				492 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Earthquake Engineering',
					'credits' => '3',
				),
				493 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Dynamics of Structures',
					'credits' => '3',
				),
				494 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Sanitary Engineering and Design',
					'credits' => '3',
				),
				495 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Advanced Waste Water Treatment and Design',
					'credits' => '3',
				),
				496 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Environmental Impact Assessment',
					'credits' => '3',
				),
				497 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Industrial Waste Management',
					'credits' => '3',
				),
				498 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Design of Environmental Engineering Structures',
					'credits' => '3',
				),
				499 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'RS and GIS for Environmental Engineering',
					'credits' => '3',
				),
				500 =>
				array(
					'subject_category' => 'Engineering Science Course (Civil Engineering)',
					'Subject' => 'Machine learning',
					'credits' => '3',
				),
				501 =>
				array(
					'subject_category' => 'Engineering Science Course (Civil Engineering)',
					'Subject' => 'Deep Learning',
					'credits' => '3',
				),
				502 =>
				array(
					'subject_category' => 'Engineering Science Course (Civil Engineering)',
					'Subject' => 'Object oriented Programing',
					'credits' => '3',
				),
				503 =>
				array(
					'subject_category' => 'Professional Elective course (Mechanical Engineering)',
					'Subject' => 'Introduction to Operation Research',
					'credits' => '3',
				),
				504 =>
				array(
					'subject_category' => 'Professional Elective course (Mechanical Engineering)',
					'Subject' => 'Alternative Energy Sources',
					'credits' => '3',
				),
				505 =>
				array(
					'subject_category' => 'Professional Elective course (Mechanical Engineering)',
					'Subject' => 'Computational Fluid Dynamics',
					'credits' => '3',
				),
				506 =>
				array(
					'subject_category' => 'Professional Elective course (Mechanical Engineering)',
					'Subject' => 'Robotics: Dynamics and Control',
					'credits' => '3',
				),
				507 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Numerical Linear Algebra',
					'credits' => '3',
				),
				508 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Meshfree Methods',
					'credits' => '3',
				),
				509 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Boundary Element Method and Boundary Integral Equations',
					'credits' => '3',
				),
				510 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'PDE Based Image Processing',
					'credits' => '3',
				),
				511 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Topology and Operator Theory',
					'credits' => '3',
				),
				512 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Infinite dimensional Control Theory',
					'credits' => '3',
				),
				513 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Bayesian Statistics',
					'credits' => '3',
				),
				514 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Financial Mathematics',
					'credits' => '3',
				),
				515 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Selections from World Literature',
					'credits' => '2',
				),
				516 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Business Communication',
					'credits' => '2',
				),
				517 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Visual Story Telling',
					'credits' => '2',
				),
				518 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Introduction to Culture Studies',
					'credits' => '2',
				),
				519 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Literature and Visual Arts',
					'credits' => '2',
				),
				520 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Cinema and Philosophy',
					'credits' => '2',
				),
				521 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'The Humanities for a Critical Understanding of the World',
					'credits' => '2',
				),
				522 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Academic Writing',
					'credits' => '2',
				),
				523 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Urban Studies: Reading the City',
					'credits' => '2',
				),
				524 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Contemporary Shakespeare: Readings and Adaptations',
					'credits' => '2',
				),
				525 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Philosophical Arguments',
					'credits' => '2',
				),
				526 =>
				array(
					'subject_category' => 'Sciences',
					'Subject' => 'Functions of Several Variables',
					'credits' => '10',
				),
				527 =>
				array(
					'subject_category' => 'Sciences',
					'Subject' => 'Physics. I',
					'credits' => '10',
				),
				528 =>
				array(
					'subject_category' => 'Sciences',
					'Subject' => 'Physics Lab.1',
					'credits' => '4',
				),
				529 =>
				array(
					'subject_category' => 'Professional',
					'Subject' => 'Introduction to Civil Engg',
					'credits' => '8',
				),
				530 =>
				array(
					'subject_category' => 'Engineering',
					'Subject' => 'Introduction to Programming',
					'credits' => '12',
				),
				531 =>
				array(
					'subject_category' => 'Engineering',
					'Subject' => 'Engg. Drawing',
					'credits' => '7',
				),
				532 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Ecology and Environment',
					'credits' => '0',
				),
				533 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Life Skills I',
					'credits' => '0',
				),
				534 =>
				array(
					'subject_category' => 'Mandatory course',
					'Subject' => 'NCC (NC1010)/NSO (NS1020)/NSO (NS1030)',
					'credits' => '0',
				),
				535 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Workshop I',
					'credits' => '3',
				),
				536 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Series and Matrices',
					'credits' => '10',
				),
				537 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics. II',
					'credits' => '10',
				),
				538 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Engg. Mechanics',
					'credits' => '10',
				),
				539 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Chemistry I',
					'credits' => '10',
				),
				540 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Chemistry Lab',
					'credits' => '3',
				),
				541 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'CE Materials and Construction',
					'credits' => '9',
				),
				542 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Life Skills II',
					'credits' => '0',
				),
				543 =>
				array(
					'subject_category' => 'Mandatory course',
					'Subject' => 'NCC (NC1010)/NSO (NS1020)/NSO (NS1030)',
					'credits' => '0',
				),
				544 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Workshop II',
					'credits' => '3',
				),
				545 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Math. 3',
					'credits' => '9',
				),
				546 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Mechanics of Materials',
					'credits' => '11',
				),
				547 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Transportation Engineering - 1',
					'credits' => '9',
				),
				548 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Hydraulic Engineering',
					'credits' => '11',
				),
				549 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Surveying',
					'credits' => '10',
				),
				550 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Structural Analysis',
					'credits' => '11',
				),
				551 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Geotechnical Engineering - 1',
					'credits' => '11',
				),
				552 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Transportation Engineering - 2',
					'credits' => '9',
				),
				553 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Environmental Engineering',
					'credits' => '10',
				),
				554 =>
				array(
					'subject_category' => 'Sciences',
					'Subject' => 'Science Elective (Maths/Physics/Chemistry)',
					'credits' => '9',
				),
				555 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management course',
					'Subject' => 'Humanities Elec. 1',
					'credits' => '9',
				),
				556 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management course',
					'Subject' => 'Life Sciences',
					'credits' => '9',
				),
				557 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Geotechnical Engineering - 2',
					'credits' => '11',
				),
				558 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Water Resources Engineering',
					'credits' => '12',
				),
				559 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Basic RC Design',
					'credits' => '11',
				),
				560 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Hydraulic & Environ. Engg. Lab',
					'credits' => '4',
				),
				561 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Construction Material Lab',
					'credits' => '4',
				),
				562 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Basic Steel Design',
					'credits' => '11',
				),
				563 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Construction Project Mgmt.',
					'credits' => '10',
				),
				564 =>
				array(
					'subject_category' => 'Humanities',
					'Subject' => 'Humanities Elec. 2',
					'credits' => '9',
				),
				565 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Structural Engg. Lab',
					'credits' => '4',
				),
				566 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'Summer Internship',
					'credits' => '0',
				),
				567 =>
				array(
					'subject_category' => 'Humanities',
					'Subject' => 'Humanities Elec. 3',
					'credits' => '9',
				),
				568 =>
				array(
					'subject_category' => 'Humanities',
					'Subject' => 'Professional Ethics',
					'credits' => '0',
				),
				569 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'LINEAR ALGEBRA, NUMERICAL AND COMPLEX ANALYSIS',
					'credits' => '4',
				),
				570 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-I',
					'credits' => '1',
				),
				571 =>
				array(
					'subject_category' => 'Project (Civil Engineering)',
					'Subject' => 'DIY PROJECT',
					'credits' => '2',
				),
				572 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'CHEMISTRY LABORATORY',
					'credits' => '2',
				),
				573 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'CHEMISTRY',
					'credits' => '4',
				),
				574 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-II',
					'credits' => '1',
				),
				575 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'BASIC ENGINEERING MECHANICS',
					'credits' => '4',
				),
				576 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'ADVANCED CALCULUS',
					'credits' => '4',
				),
				577 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'ELECTRICAL TECHNOLOGY',
					'credits' => '4',
				),
				578 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'PROGAMMING AND DATA STRUCTURES LABORATORY',
					'credits' => '2',
				),
				579 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'PHYSICS LABORATORY',
					'credits' => '2',
				),
				580 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'ENVIRONMENTAL SCIENCE',
					'credits' => '2',
				),
				581 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'ENGLISH FOR COMMUNICATION',
					'credits' => '3',
				),
				582 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'PROGAMMING AND DATA STRUCTURES',
					'credits' => '3',
				),
				583 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'ENGINEERING DRAWING AND COMPUTER GRAPHICS',
					'credits' => '3',
				),
				584 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'ENGINEERING LABORATORY',
					'credits' => '2',
				),
				585 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'PHYSICS OF WAVES',
					'credits' => '4',
				),
				586 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'SCIENCE OF LIVING SYSTEMS',
					'credits' => '2',
				),
				587 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'HYDRAULICS',
					'credits' => '4',
				),
				588 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'INTRODUCTION TO CIVIL ENGINEERING AND MATERIALS',
					'credits' => '3',
				),
				589 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'PROBABILITY AND STATISTICS',
					'credits' => '3',
				),
				590 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-III',
					'credits' => '1',
				),
				591 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'GEOMATICS',
					'credits' => '3',
				),
				592 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'HYDRAULIC AND WATER RESOURCES ENGINEERING LABORATORY',
					'credits' => '2',
				),
				593 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'SOLID MECHANICS',
					'credits' => '4',
				),
				594 =>
				array(
					'subject_category' => 'Professional core course (Civil Engineering)',
					'Subject' => 'BASIC ELECTRONICS',
					'credits' => '4',
				),
				595 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'TRANSPORTATION ENGINEERING LABORATORY',
					'credits' => '2',
				),
				596 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'STRUCTURAL ANALYSIS',
					'credits' => '4',
				),
				597 =>
				array(
					'subject_category' => 'Professional Elective course (Civil Engineering)',
					'Subject' => 'TRANSPORTATION ENGINEERING',
					'credits' => '4',
				),
				598 =>
				array(
					'subject_category' => 'Professional core course (Civil Engineering)',
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-IV',
					'credits' => '1',
				),
				599 =>
				array(
					'subject_category' => 'Professional core course (Civil Engineering)',
					'Subject' => 'BASIC ELECTRONICS LABORATORY',
					'credits' => '2',
				),
				600 =>
				array(
					'subject_category' => 'Professional core course (Civil Engineering)',
					'Subject' => 'GEOMATICS PRACTICE',
					'credits' => '2',
				),
				601 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics (Mechanics & Mechanics of Solids)',
					'credits' => '5.5',
				),
				602 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics –I
(Calculus, Multivariable Calculus and Linear Algebra)',
					'credits' => '4',
				),
				603 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Chemistry-I',
					'credits' => '5.5',
				),
				604 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics –II (Differential Equations)',
					'credits' => '4',
				),
				605 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Biology for Engineers',
					'credits' => '3',
				),
				606 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Life Science',
					'credits' => '2',
				),
				607 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics-III
(Transform & Discrete Mathematics)',
					'credits' => '2',
				),
				608 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'English',
					'credits' => '3',
				),
				609 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Introduction to Civil Engineering',
					'credits' => '2',
				),
				610 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Humanities-I (Effective Technical
Communication)',
					'credits' => '3',
				),
				611 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Civil Engineering - Societal & Global
Impact',
					'credits' => '2',
				),
				612 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Professional Practice, Law & Ethics',
					'credits' => '2',
				),
				613 =>
				array(
					'subject_category' => 'Engineering Science Course',
					'Subject' => 'Basic Electrical Engineering',
					'credits' => '5',
				),
				614 =>
				array(
					'subject_category' => 'Engineering Science Course',
					'Subject' => 'Programming for Problem Solving',
					'credits' => '5',
				),
				615 =>
				array(
					'subject_category' => 'Engineering Science Course',
					'Subject' => 'Workshop  Manufacturing Practices',
					'credits' => '3',
				),
				616 =>
				array(
					'subject_category' => 'Engineering Science Course',
					'Subject' => 'Engineering Graphics & Design',
					'credits' => '3',
				),
				617 =>
				array(
					'subject_category' => 'Engineering Science Course',
					'Subject' => 'Basic Electronics',
					'credits' => '2',
				),
				618 =>
				array(
					'subject_category' => 'Engineering Science Course',
					'Subject' => 'Computer-aided Civil Engineering
Drawing',
					'credits' => '2',
				),
				619 =>
				array(
					'subject_category' => 'Engineering Science Course',
					'Subject' => 'Engineering Mechanics',
					'credits' => '4',
				),
				620 =>
				array(
					'subject_category' => 'Engineering Science Course',
					'Subject' => 'Energy Science & Engineering',
					'credits' => '2',
				),
				621 =>
				array(
					'subject_category' => 'Engineering Science Course',
					'Subject' => 'Mechanical Engineering',
					'credits' => '3',
				),
				622 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Instrumentation & Sensor Technologies
for Civil Engineering Applications',
					'credits' => '3',
				),
				623 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Engineering Geology',
					'credits' => '2',
				),
				624 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Disaster Preparedness &Planning',
					'credits' => '2',
				),
				625 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Introduction to Fluid Mechanics',
					'credits' => '3',
				),
				626 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Introduction to Solid Mechanics',
					'credits' => '2',
				),
				627 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Surveying & Geomatics',
					'credits' => '3',
				),
				628 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Materials, Testing & Evaluation',
					'credits' => '3',
				),
				629 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Mechanics of Materials',
					'credits' => '3',
				),
				630 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Hydraulic Engineering',
					'credits' => '3',
				),
				631 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Structural Engineering',
					'credits' => '3',
				),
				632 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Geotechnical Engineering',
					'credits' => '3',
				),
				633 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Hydrology & Water Resources
Engineering',
					'credits' => '3',
				),
				634 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Environmental Engineering',
					'credits' => '3',
				),
				635 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Transportation Engineering',
					'credits' => '3',
				),
				636 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Construction Engineering &
Management',
					'credits' => '3',
				),
				637 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Engineering Economics, Estimation & Costing',
					'credits' => '5',
				),
				638 =>
				array(
					'subject_category' => 'Professional Elective course',
					'Subject' => 'Elective-I',
					'credits' => '3',
				),
				639 =>
				array(
					'subject_category' => 'Professional Elective course',
					'Subject' => 'Elective-II',
					'credits' => '3',
				),
				640 =>
				array(
					'subject_category' => 'Professional Elective course',
					'Subject' => 'Elective-III',
					'credits' => '3',
				),
				641 =>
				array(
					'subject_category' => 'Professional Elective course',
					'Subject' => 'Elective-IV',
					'credits' => '3',
				),
				642 =>
				array(
					'subject_category' => 'Professional Elective course',
					'Subject' => 'Elective V',
					'credits' => '3',
				),
				643 =>
				array(
					'subject_category' => 'Professional Elective course',
					'Subject' => 'Elective-VI',
					'credits' => '3',
				),
				644 =>
				array(
					'subject_category' => 'Professional Elective course',
					'Subject' => 'Elective VII',
					'credits' => '3',
				),
				645 =>
				array(
					'subject_category' => 'Professional Elective course',
					'Subject' => 'Elective VIII',
					'credits' => '2',
				),
				646 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Open Elective-I (Humanities)',
					'credits' => '3',
				),
				647 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Open     Elective-II     (Metro     Systems     &
Engineering) – Suggested (See Annexure-I)',
					'credits' => '3',
				),
				648 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Open Elective-III',
					'credits' => '3',
				),
				649 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Open Elective-IV',
					'credits' => '2',
				),
				650 =>
				array(
					'subject_category' => 'Project (Civil Engineering)',
					'Subject' => 'Project-1 (Project work, seminar and internship in industry or at appropriate work place)',
					'credits' => '6',
				),
				651 =>
				array(
					'subject_category' => 'Project (Civil Engineering)',
					'Subject' => 'Project-2 (Continued from        VII Semester, Project work, seminar   and internship  in industry    or at appropriate
work place)',
					'credits' => '6',
				),
				652 =>
				array(
					'subject_category' => 'Mandatory course',
					'Subject' => 'Management I (Organizational Behavior)',
					'credits' => '0',
				),
				653 =>
				array(
					'subject_category' => 'Sciences',
					'Subject' => 'Functions of Several Variables',
					'credits' => '10',
				),
				654 =>
				array(
					'subject_category' => 'Sciences',
					'Subject' => 'Physics. I',
					'credits' => '10',
				),
				655 =>
				array(
					'subject_category' => 'Sciences',
					'Subject' => 'Physics Lab.1',
					'credits' => '4',
				),
				656 =>
				array(
					'subject_category' => 'Engineering',
					'Subject' => 'Engineering Mechanics',
					'credits' => '10',
				),
				657 =>
				array(
					'subject_category' => 'Sciences',
					'Subject' => 'Chemistry 1',
					'credits' => '10',
				),
				658 =>
				array(
					'subject_category' => 'Engineering',
					'Subject' => 'Problem Solving using Computers',
					'credits' => '12',
				),
				659 =>
				array(
					'Subject' => 'Life Skills I',
					'credits' => '0',
				),
				660 =>
				array(
					'Subject' => 'Ecology and Environment',
					'credits' => '0',
				),
				661 =>
				array(
					'Subject' => 'NCC (NC1010)/NSO (NS1020)/NSO (NS1030)',
					'credits' => '0',
				),
				662 =>
				array(
					'subject_category' => 'Engineering',
					'Subject' => 'Workshop I',
					'credits' => '3',
				),
				663 =>
				array(
					'subject_category' => 'Sciences',
					'Subject' => 'Series and Matrices',
					'credits' => '10',
				),
				664 =>
				array(
					'subject_category' => 'Sciences',
					'Subject' => 'Physics. II',
					'credits' => '10',
				),
				665 =>
				array(
					'subject_category' => 'Professional',
					'Subject' => 'Discrete Mathematics for CS',
					'credits' => '10',
				),
				666 =>
				array(
					'subject_category' => 'Engineering',
					'Subject' => 'Engineering Drawings',
					'credits' => '7',
				),
				667 =>
				array(
					'subject_category' => 'Sciences',
					'Subject' => 'Chemistry Lab',
					'credits' => '3',
				),
				668 =>
				array(
					'subject_category' => 'Engineering',
					'Subject' => 'Basic Electrical Engineering',
					'credits' => '10',
				),
				669 =>
				array(
					'Subject' => 'Life Skills II',
					'credits' => '0',
				),
				670 =>
				array(
					'Subject' => 'NCC (NC1010)/NSO (NS1020)/NSO (NS1030)',
					'credits' => '0',
				),
				671 =>
				array(
					'subject_category' => 'Engineering',
					'Subject' => 'Workshop II',
					'credits' => '3',
				),
				672 =>
				array(
					'subject_category' => 'Sciences',
					'Subject' => 'Basic Graph Theory',
					'credits' => '9',
				),
				673 =>
				array(
					'subject_category' => 'Humanities',
					'Subject' => 'Humanities Elective 1',
					'credits' => '9',
				),
				674 =>
				array(
					'subject_category' => 'Professional',
					'Subject' => 'Programming and Data Structures',
					'credits' => '10',
				),
				675 =>
				array(
					'subject_category' => 'Professional',
					'Subject' => 'Programming and Data Structures Lab',
					'credits' => '6',
				),
				676 =>
				array(
					'subject_category' => 'Professional',
					'Subject' => 'Foundations of Computer Systems Design',
					'credits' => '9',
				),
				677 =>
				array(
					'subject_category' => 'Professional',
					'Subject' => 'Foundations of Computer Systems Design Lab',
					'credits' => '4',
				),
				678 =>
				array(
					'subject_category' => 'Professional',
					'Subject' => 'Languages, Machines, and Computations',
					'credits' => '10',
				),
				679 =>
				array(
					'subject_category' => 'Professional',
					'Subject' => 'Design and Analysis of Algorithms',
					'credits' => '10',
				),
				680 =>
				array(
					'subject_category' => 'Professional',
					'Subject' => 'Computer Organization and Architecture',
					'credits' => '10',
				),
				681 =>
				array(
					'subject_category' => 'Professional',
					'Subject' => 'Computer Organization and Architecture Lab',
					'credits' => '6',
				),
				682 =>
				array(
					'subject_category' => 'Professional',
					'Subject' => 'Object-Oriented Algorithms Implementation and Analysis Lab',
					'credits' => '6',
				),
				683 =>
				array(
					'subject_category' => 'Sciences',
					'Subject' => 'Probability, Stochastic Process and Statistics',
					'credits' => '9',
				),
				684 =>
				array(
					'subject_category' => 'Professional',
					'Subject' => 'Paradigms of Programming',
					'credits' => '9',
				),
				685 =>
				array(
					'subject_category' => 'Professional',
					'Subject' => 'Operating Systems',
					'credits' => '15',
				),
				686 =>
				array(
					'subject_category' => 'Professional',
					'Subject' => 'Compiler Design',
					'credits' => '15',
				),
				687 =>
				array(
					'subject_category' => 'Sciences',
					'Subject' => 'Life Sciences',
					'credits' => '9',
				),
				688 =>
				array(
					'subject_category' => 'SUMMER',
					'Subject' => 'Summer Internship',
					'credits' => '0',
				),
				689 =>
				array(
					'Subject' => 'Humanities Elective 2',
					'credits' => '9',
				),
				690 =>
				array(
					'Subject' => 'Professional Ethics',
					'credits' => '0',
				),
				691 =>
				array(
					'Subject' => 'Humanities Elective 3',
					'credits' => '9',
				),
				692 =>
				array(
					'Subject' => 'Mathematics – I',
					'credits' => '5',
				),
				693 =>
				array(
					'Subject' => 'Chemistry – I',
					'credits' => '3',
				),
				694 =>
				array(
					'Subject' => 'Introduction to Electrical Engineering',
					'credits' => '4',
				),
				695 =>
				array(
					'Subject' => 'Engineering Drawing',
					'credits' => '1.5',
				),
				696 =>
				array(
					'Subject' => 'Earth and Environmental Sciences',
					'credits' => '2',
				),
				697 =>
				array(
					'Subject' => 'Thermodynamics',
					'credits' => '3',
				),
				698 =>
				array(
					'Subject' => 'Media Project',
					'credits' => '1.5',
				),
				699 =>
				array(
					'Subject' => 'English and Humanities – I',
					'credits' => '4',
				),
				700 =>
				array(
					'Subject' => 'French Language & Culture – I',
					'credits' => '0',
				),
				701 =>
				array(
					'Subject' => 'Mathematics – II',
					'credits' => '4',
				),
				702 =>
				array(
					'Subject' => 'Physics – I',
					'credits' => '4',
				),
				703 =>
				array(
					'Subject' => 'Chemistry – II',
					'credits' => '3',
				),
				704 =>
				array(
					'Subject' => 'Electronics',
					'credits' => '4',
				),
				705 =>
				array(
					'Subject' => 'Introduction to Computer Science',
					'credits' => '4',
				),
				706 =>
				array(
					'Subject' => 'Workshop Practice',
					'credits' => '0',
				),
				707 =>
				array(
					'Subject' => 'Introduction to Enterprises & Economy',
					'credits' => '3',
				),
				708 =>
				array(
					'Subject' => 'Professional Ethics',
					'credits' => '1',
				),
				709 =>
				array(
					'Subject' => 'French Language & Culture – II',
					'credits' => '0',
				),
				710 =>
				array(
					'Subject' => 'Mathematics – III',
					'credits' => '4',
				),
				711 =>
				array(
					'Subject' => 'Physics – II',
					'credits' => '5',
				),
				712 =>
				array(
					'Subject' => 'Mechanics',
					'credits' => '3',
				),
				713 =>
				array(
					'Subject' => 'Signals & Systems',
					'credits' => '4',
				),
				714 =>
				array(
					'Subject' => 'Data Structures',
					'credits' => '5',
				),
				715 =>
				array(
					'Subject' => 'Discrete Mathematical Structures',
					'credits' => '2',
				),
				716 =>
				array(
					'Subject' => 'French Language & Culture – III',
					'credits' => '0',
				),
				717 =>
				array(
					'Subject' => 'Numerical Methods',
					'credits' => '4',
				),
				718 =>
				array(
					'Subject' => 'Digital Logic Design and Computer
Architecture',
					'credits' => '4',
				),
				719 =>
				array(
					'Subject' => 'Design and Analysis of Algorithms',
					'credits' => '4',
				),
				720 =>
				array(
					'Subject' => 'Object Oriented Programming',
					'credits' => '3',
				),
				721 =>
				array(
					'Subject' => 'Theory of Computation',
					'credits' => '3',
				),
				722 =>
				array(
					'Subject' => 'Design Thinking',
					'credits' => '2',
				),
				723 =>
				array(
					'Subject' => 'French Language & Culture – IV',
					'credits' => '0',
				),
				724 =>
				array(
					'Subject' => 'Mathematics – IV',
					'credits' => '4',
				),
				725 =>
				array(
					'Subject' => 'Introduction to Materials Sciences',
					'credits' => '3',
				),
				726 =>
				array(
					'Subject' => 'Principles of Programming Languages',
					'credits' => '2',
				),
				727 =>
				array(
					'Subject' => 'Operating Systems',
					'credits' => '4',
				),
				728 =>
				array(
					'Subject' => 'Database Management Systems',
					'credits' => '4',
				),
				729 =>
				array(
					'Subject' => 'Microprocessors and Interfacing',
					'credits' => '3',
				),
				730 =>
				array(
					'Subject' => 'HSS + Mgmt. - Elective – I',
					'credits' => '2',
				),
				731 =>
				array(
					'Subject' => 'French Language & Culture – V',
					'credits' => '0',
				),
				732 =>
				array(
					'Subject' => 'Computer Networks',
					'credits' => '4',
				),
				733 =>
				array(
					'Subject' => 'Web Programming',
					'credits' => '3',
				),
				734 =>
				array(
					'Subject' => 'Software Engineering',
					'credits' => '3',
				),
				735 =>
				array(
					'Subject' => 'Machine Learning',
					'credits' => '3',
				),
				736 =>
				array(
					'Subject' => 'Third year team project',
					'credits' => '3',
				),
				737 =>
				array(
					'Subject' => 'Elective – I',
					'credits' => '3',
				),
				738 =>
				array(
					'Subject' => 'HSS + Mgmt. - Elective – II',
					'credits' => '2',
				),
				739 =>
				array(
					'Subject' => 'French Language & Culture – VI',
					'credits' => '0',
				),
				740 =>
				array(
					'Subject' => 'Distributed Systems',
					'credits' => '4',
				),
				741 =>
				array(
					'Subject' => 'Compiler Design',
					'credits' => '3',
				),
				742 =>
				array(
					'Subject' => 'Cryptography and Network Security',
					'credits' => '4',
				),
				743 =>
				array(
					'Subject' => 'HSS + Mgmt. - Elective – III',
					'credits' => '2',
				),
				744 =>
				array(
					'Subject' => 'Elective – II',
					'credits' => '3',
				),
				745 =>
				array(
					'Subject' => 'Elective – III',
					'credits' => '3',
				),
				746 =>
				array(
					'Subject' => 'Year-4 Project',
					'credits' => '3',
				),
				747 =>
				array(
					'Subject' => 'French Language & Culture –VII',
					'credits' => '0',
				),
				748 =>
				array(
					'Subject' => 'Elective – IV',
					'credits' => '3',
				),
				749 =>
				array(
					'Subject' => 'Elective – V',
					'credits' => '3',
				),
				750 =>
				array(
					'Subject' => 'Year-4 Project',
					'credits' => '9',
				),
				751 =>
				array(
					'Subject' => 'French Language & Culture – VIII',
					'credits' => '0',
				),
				752 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Advanced Data Analytics',
					'credits' => '3',
				),
				753 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Mobile Communication and Computing',
					'credits' => '3',
				),
				754 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'VLSI Design Using Verilog',
					'credits' => '3',
				),
				755 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Social Computing',
					'credits' => '3',
				),
				756 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Deep Learning',
					'credits' => '3',
				),
				757 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Information Retrieval and Natural Language
Processing',
					'credits' => '3',
				),
				758 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'High Performance Computing',
					'credits' => '3',
				),
				759 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Cryptography and Information Security',
					'credits' => '3',
				),
				760 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Performance Evaluation of Computer Networks',
					'credits' => '3',
				),
				761 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Wireless Sensor Networks',
					'credits' => '3',
				),
				762 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Information Theory and Coding',
					'credits' => '3',
				),
				763 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Digital Image Processing',
					'credits' => '3',
				),
				764 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Computer Vision',
					'credits' => '3',
				),
				765 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Advanced Microprocessors',
					'credits' => '3',
				),
				766 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'IoT System Architecture and Design',
					'credits' => '3',
				),
				767 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Sensors and Instrumentation',
					'credits' => '3',
				),
				768 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'High Performance Embedded Systems',
					'credits' => '3',
				),
				769 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Introduction to Operations Research',
					'credits' => '3',
				),
				770 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Introduction to Robotics',
					'credits' => '3',
				),
				771 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Computational Fluid Dynamics',
					'credits' => '3',
				),
				772 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Robotics: Dynamics and Control',
					'credits' => '3',
				),
				773 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Numerical Linear Algebra',
					'credits' => '3',
				),
				774 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Meshfree Methods',
					'credits' => '3',
				),
				775 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Boundary Element Method and Boundary Integral Equations',
					'credits' => '3',
				),
				776 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'PDE Based Image Processing',
					'credits' => '3',
				),
				777 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Topology and Operator Theory',
					'credits' => '3',
				),
				778 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Infinite dimensional Control Theory',
					'credits' => '3',
				),
				779 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Bayesian Statistics',
					'credits' => '3',
				),
				780 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Financial Mathematics',
					'credits' => '3',
				),
				781 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Nonlinear Conservation Laws and Applications',
					'credits' => '3',
				),
				782 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Selections from World Literature',
					'credits' => '2',
				),
				783 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Business Communication',
					'credits' => '2',
				),
				784 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Visual Story Telling',
					'credits' => '2',
				),
				785 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Introduction to Culture Studies',
					'credits' => '2',
				),
				786 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Literature and Visual Arts',
					'credits' => '2',
				),
				787 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Cinema and Philosophy',
					'credits' => '2',
				),
				788 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'The Humanities for a Critical Understanding of the World',
					'credits' => '2',
				),
				789 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Academic Writing',
					'credits' => '2',
				),
				790 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Urban Studies: Reading the City',
					'credits' => '2',
				),
				791 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Contemporary Shakespeare: Readings and Adaptations',
					'credits' => '2',
				),
				792 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Philosophical Arguments',
					'credits' => '2',
				),
				793 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'PROGAMMING AND DATA STRUCTURES LABORATORY',
					'credits' => '2',
				),
				794 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'BASIC ENGINEERING MECHANICS',
					'credits' => '4',
				),
				795 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ENVIRONMENTAL SCIENCE',
					'credits' => '2',
				),
				796 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ENGINEERING LABORATORY',
					'credits' => '2',
				),
				797 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ELECTRICAL TECHNOLOGY',
					'credits' => '4',
				),
				798 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ENGLISH FOR COMMUNICATION',
					'credits' => '3',
				),
				799 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'LINEAR ALGEBRA, NUMERICAL AND COMPLEX ANALYSIS',
					'credits' => '4',
				),
				800 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ENGINEERING DRAWING AND COMPUTER GRAPHICS',
					'credits' => '3',
				),
				801 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-II',
					'credits' => '1',
				),
				802 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'PHYSICS LABORATORY',
					'credits' => '2',
				),
				803 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'CHEMISTRY LABORATORY',
					'credits' => '2',
				),
				804 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'SCIENCE OF LIVING SYSTEMS',
					'credits' => '2',
				),
				805 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ADVANCED CALCULUS',
					'credits' => '4',
				),
				806 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-I',
					'credits' => '1',
				),
				807 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'PROGAMMING AND DATA STRUCTURES',
					'credits' => '3',
				),
				808 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'DIY PROJECT',
					'credits' => '2',
				),
				809 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'PHYSICS OF WAVES',
					'credits' => '4',
				),
				810 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'CHEMISTRY',
					'credits' => '4',
				),
				811 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'PROBABILITY AND STATISTICS',
					'credits' => '3',
				),
				812 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'ALGORITHMS - I',
					'credits' => '4',
				),
				813 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'ALGORITHMS LABORATORY',
					'credits' => '2',
				),
				814 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'SIGNALS AND SYSTEMS',
					'credits' => '4',
				),
				815 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'BASIC ELECTRONICS',
					'credits' => '4',
				),
				816 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-III',
					'credits' => '1',
				),
				817 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'BASIC ELECTRONICS LABORATORY',
					'credits' => '2',
				),
				818 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'DISCRETE STRUCTURES',
					'credits' => '4',
				),
				819 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'FORMAL LANGUAGE AND AUTOMATA THEORY',
					'credits' => '4',
				),
				820 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'SOFTWARE ENGINEERING',
					'credits' => '3',
				),
				821 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'SWITCHING CIRCUITS LABORATORY',
					'credits' => '2',
				),
				822 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'SYSTEMS PROGRAMMING LABORATORY',
					'credits' => '2',
				),
				823 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'SWITCHING CIRCUITS AND LOGIC DESIGN',
					'credits' => '4',
				),
				824 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-IV',
					'credits' => '1',
				),
				825 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'SOFTWARE ENGINEERING LABORATORY',
					'credits' => '2',
				),
				826 =>
				array(
					'Subject' => 'Discrete Structures',
					'credits' => '4',
				),
				827 =>
				array(
					'Subject' => 'Computer Programming',
					'credits' => '5',
				),
				828 =>
				array(
					'Subject' => 'Real Analysis',
					'credits' => '4',
				),
				829 =>
				array(
					'Subject' => 'Digital Systems and Microcontrollers',
					'credits' => '5',
				),
				830 =>
				array(
					'Subject' => 'Arts-1',
					'credits' => '2',
				),
				831 =>
				array(
					'Subject' => 'Sports-1',
					'credits' => '1',
				),
				832 =>
				array(
					'Subject' => 'Value Education-1',
					'credits' => '2',
				),
				833 =>
				array(
					'Subject' => 'Linear Algebra',
					'credits' => '4',
				),
				834 =>
				array(
					'Subject' => 'Introduction to IoT',
					'credits' => '3',
				),
				835 =>
				array(
					'Subject' => 'Data Structures and Algorithms',
					'credits' => '5',
				),
				836 =>
				array(
					'Subject' => 'Introduction to Software Systems',
					'credits' => '2',
				),
				837 =>
				array(
					'Subject' => 'Computer Systems Organization',
					'credits' => '4',
				),
				838 =>
				array(
					'Subject' => 'Sports-2',
					'credits' => '1',
				),
				839 =>
				array(
					'Subject' => 'Arts-2',
					'credits' => '2',
				),
				840 =>
				array(
					'Subject' => 'Probability and Statistics',
					'credits' => '4',
				),
				841 =>
				array(
					'Subject' => 'Data and Applications',
					'credits' => '2',
				),
				842 =>
				array(
					'Subject' => 'Automata Theory',
					'credits' => '2',
				),
				843 =>
				array(
					'Subject' => 'Algorithm Analysis and Design',
					'credits' => '4',
				),
				844 =>
				array(
					'Subject' => 'Operating Systems and Networks',
					'credits' => '4',
				),
				845 =>
				array(
					'Subject' => 'Science -1',
					'credits' => '4',
				),
				846 =>
				array(
					'Subject' => 'Embedded Systems Workshop',
					'credits' => '3',
				),
				847 =>
				array(
					'Subject' => 'Sports-3',
					'credits' => '1',
				),
				848 =>
				array(
					'Subject' => 'Theory/Foundation Breadth Elective – 1',
					'credits' => '2',
				),
				849 =>
				array(
					'Subject' => 'Theory/Foundation Breadth Elective – 2',
					'credits' => '2',
				),
				850 =>
				array(
					'Subject' => 'Theory/Foundation Breadth Elective – 3',
					'credits' => '2',
				),
				851 =>
				array(
					'Subject' => 'Design and Analysis of Software Systems',
					'credits' => '4',
				),
				852 =>
				array(
					'Subject' => 'Machine, Data and Learning',
					'credits' => '4',
				),
				853 =>
				array(
					'Subject' => 'Science 2',
					'credits' => '4',
				),
				854 =>
				array(
					'Subject' => 'Intro to Human Sciences',
					'credits' => '4',
				),
				855 =>
				array(
					'Subject' => 'Sports-4',
					'credits' => '1',
				),
				856 =>
				array(
					'Subject' => 'Value Education-2',
					'credits' => '2',
				),
				857 =>
				array(
					'Subject' => 'Bouquet Course – 1',
					'credits' => '4',
				),
				858 =>
				array(
					'Subject' => 'Science Elective – 1',
					'credits' => '4',
				),
				859 =>
				array(
					'Subject' => 'HS Elective-1',
					'credits' => '4',
				),
				860 =>
				array(
					'Subject' => 'Open Elective-1',
					'credits' => '4',
				),
				861 =>
				array(
					'Subject' => 'BTP-1 / Honours-2',
					'credits' => '2',
				),
				862 =>
				array(
					'Subject' => 'Bouquet Course – 2',
					'credits' => '4',
				),
				863 =>
				array(
					'Subject' => 'Bouquet Course – 3',
					'credits' => '4',
				),
				864 =>
				array(
					'Subject' => 'HS Elective-2',
					'credits' => '4',
				),
				865 =>
				array(
					'Subject' => 'Open Elective-2',
					'credits' => '4',
				),
				866 =>
				array(
					'Subject' => 'BTP-2 / Honours-3',
					'credits' => '2',
				),
				867 =>
				array(
					'Subject' => 'Open Elective-3',
					'credits' => '4',
				),
				868 =>
				array(
					'Subject' => 'Bouquet Course – 4',
					'credits' => '4',
				),
				869 =>
				array(
					'Subject' => 'Open Elective-4',
					'credits' => '4',
				),
				870 =>
				array(
					'Subject' => 'Ethics-1',
					'credits' => '2',
				),
				871 =>
				array(
					'Subject' => 'Bouquet Course – 5',
					'credits' => '4',
				),
				872 =>
				array(
					'Subject' => 'HS Elective-3',
					'credits' => '4',
				),
				873 =>
				array(
					'Subject' => 'Open Elective-5',
					'credits' => '4',
				),
				874 =>
				array(
					'Subject' => 'Ethics-2',
					'credits' => '2',
				),
				875 =>
				array(
					'Subject' => 'Science Elective –2',
					'credits' => '4',
				),
				876 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics
(Semi-conductor Physics)',
					'credits' => '5.5',
				),
				877 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics-II (Probability and Statistics)',
					'credits' => '4',
				),
				878 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics-I (Calculus and Linear Algebra)',
					'credits' => '4',
				),
				879 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Chemistry-I',
					'credits' => '5.5',
				),
				880 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Biology',
					'credits' => '3',
				),
				881 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics-III (Differential Calculus)',
					'credits' => '2',
				),
				882 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'English',
					'credits' => '3',
				),
				883 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Humanities – 1',
					'credits' => '3',
				),
				884 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Management-I (Organizational Behaviour)/ Finance &
Accounting',
					'credits' => '3',
				),
				885 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Humanities – II',
					'credits' => '3',
				),
				886 =>
				array(
					'subject_category' => 'Engineering Science Courses',
					'Subject' => 'Basic Electrical Engineering',
					'credits' => '5',
				),
				887 =>
				array(
					'subject_category' => 'Engineering Science Courses',
					'Subject' => 'Engineering Graphics & Design',
					'credits' => '3',
				),
				888 =>
				array(
					'subject_category' => 'Engineering Science Courses',
					'Subject' => 'Programming  for Problem Solving',
					'credits' => '5',
				),
				889 =>
				array(
					'subject_category' => 'Engineering Science Courses',
					'Subject' => 'Workshop/Manufacturing Practices',
					'credits' => '3',
				),
				890 =>
				array(
					'subject_category' => 'Engineering Science Courses',
					'Subject' => 'Analog Electronic Circuits',
					'credits' => '5',
				),
				891 =>
				array(
					'subject_category' => 'Engineering Science Courses',
					'Subject' => 'Digital Electronics',
					'credits' => '5',
				),
				892 =>
				array(
					'subject_category' => 'Engineering Science Courses',
					'Subject' => 'Signals and Systems',
					'credits' => '3',
				),
				893 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Data Structure & Algorithms',
					'credits' => '5',
				),
				894 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'IT Workshop –
(Sci Lab/MATLAB)',
					'credits' => '3',
				),
				895 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Discrete Mathematics',
					'credits' => '4',
				),
				896 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Computer Organization and Architecture',
					'credits' => '5',
				),
				897 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Operating Systems',
					'credits' => '5',
				),
				898 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Design and Analysis of Algorithms',
					'credits' => '5',
				),
				899 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Database Management Systems',
					'credits' => '5',
				),
				900 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Formal   Language,   Automats and Complier',
					'credits' => '3',
				),
				901 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Object Oriented Programming',
					'credits' => '4',
				),
				902 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Complier Design',
					'credits' => '5',
				),
				903 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Computer Networks',
					'credits' => '5',
				),
				904 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Elective – I',
					'credits' => '3',
				),
				905 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Elective-II',
					'credits' => '3',
				),
				906 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Elective-III',
					'credits' => '3',
				),
				907 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Elective-IV',
					'credits' => '3',
				),
				908 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Elective-V',
					'credits' => '3',
				),
				909 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Elective-VI',
					'credits' => '3',
				),
				910 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Open Elective – I',
					'credits' => '3',
				),
				911 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Open-Elective-II',
					'credits' => '3',
				),
				912 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Open-Elective-III',
					'credits' => '3',
				),
				913 =>
				array(
					'subject_category' => 'Open Elective course',
					'Subject' => 'Open-Elective-IV',
					'credits' => '3',
				),
				914 =>
				array(
					'subject_category' => 'Project',
					'Subject' => 'Project-1',
					'credits' => '3',
				),
				915 =>
				array(
					'subject_category' => 'Project',
					'Subject' => 'Project-II',
					'credits' => '6',
				),
				916 =>
				array(
					'subject_category' => 'Project',
					'Subject' => 'Project-III',
					'credits' => '6',
				),
				917 =>
				array(
					'subject_category' => 'Mandatory courses',
					'Subject' => 'Environmental Sciences',
					'credits' => '0',
				),
				918 =>
				array(
					'subject_category' => 'Mandatory courses',
					'Subject' => 'Constitution of India/ Essence of Indian
Traditional Knowledge',
					'credits' => '0',
				),
				919 =>
				array(
					'Subject' => 'Discrete Mathematics',
				),
				920 =>
				array(
					'Subject' => 'Fundamentals of Data Structures',
				),
				921 =>
				array(
					'Subject' => 'Object Oriented Programming',
				),
				922 =>
				array(
					'Subject' => 'Computer Graphics',
				),
				923 =>
				array(
					'Subject' => 'Digital Electronics and Logic Design',
				),
				924 =>
				array(
					'Subject' => 'Data Structures Laboratory',
				),
				925 =>
				array(
					'Subject' => ' LabOOP and Computer Graphics',
				),
				926 =>
				array(
					'Subject' => 'Digital Electronics Laboratory',
				),
				927 =>
				array(
					'Subject' => 'Business Communication Skills',
				),
				928 =>
				array(
					'Subject' => 'Humanity and Social Science',
				),
				929 =>
				array(
					'Subject' => 'Audit Course 3',
				),
				930 =>
				array(
					'Subject' => 'Engineering Mathematics III',
				),
				931 =>
				array(
					'Subject' => 'Data Structures and Algorithms',
				),
				932 =>
				array(
					'Subject' => 'Software Engineering',
				),
				933 =>
				array(
					'Subject' => 'Microprocessor',
				),
				934 =>
				array(
					'Subject' => ' LanguagesPrinciples of Programming',
				),
				935 =>
				array(
					'Subject' => 'Data Structures and Algorithms Laboratory',
				),
				936 =>
				array(
					'Subject' => 'Microprocessor Laboratory',
				),
				937 =>
				array(
					'Subject' => 'Project Based Learning II',
				),
				938 =>
				array(
					'Subject' => 'Code of Conduct',
				),
				939 =>
				array(
					'Subject' => 'Audit Course 4',
				),
				940 =>
				array(
					'Subject' => 'Database Management Systems',
				),
				941 =>
				array(
					'Subject' => 'Theory of Computation',
				),
				942 =>
				array(
					'Subject' => 'Systems Programming and Operating System',
				),
				943 =>
				array(
					'Subject' => 'Computer Networks and Security',
				),
				944 =>
				array(
					'Subject' => 'Elective I',
				),
				945 =>
				array(
					'Subject' => 'Database Management Systems Laboratory',
				),
				946 =>
				array(
					'Subject' => 'Computer Networks and Security Laboratory',
				),
				947 =>
				array(
					'Subject' => 'Laboratory Practice I',
				),
				948 =>
				array(
					'Subject' => 'Seminar and Technical Communication',
				),
				949 =>
				array(
					'Subject' => 'Audit Course 5',
				),
				950 =>
				array(
					'Subject' => 'Data Science and Big Data Analytics',
				),
				951 =>
				array(
					'Subject' => 'Web Technology',
				),
				952 =>
				array(
					'Subject' => 'Artificial Intelligence',
				),
				953 =>
				array(
					'Subject' => 'Elective II',
				),
				954 =>
				array(
					'Subject' => 'Internship**',
				),
				955 =>
				array(
					'Subject' => 'Data Science and Big Data Analytics Laboratory',
				),
				956 =>
				array(
					'Subject' => 'Web Technology Laboratory',
				),
				957 =>
				array(
					'Subject' => 'Laboratory Practice II',
				),
				958 =>
				array(
					'Subject' => 'Audit Course 6',
				),
				959 =>
				array(
					'Subject' => 'High Performance Computing',
				),
				960 =>
				array(
					'Subject' => 'Artificial Intelligence and Robotics',
				),
				961 =>
				array(
					'Subject' => 'Data Analytics',
				),
				962 =>
				array(
					'Subject' => 'Elective I',
				),
				963 =>
				array(
					'Subject' => 'Elective II',
				),
				964 =>
				array(
					'Subject' => 'Lab Practice I',
				),
				965 =>
				array(
					'Subject' => 'Lab Practice II',
				),
				966 =>
				array(
					'Subject' => 'Project Work Stage I',
				),
				967 =>
				array(
					'Subject' => 'Audit Course 5',
				),
				968 =>
				array(
					'Subject' => 'Machine Learning',
				),
				969 =>
				array(
					'Subject' => 'Information and Cyber Security',
				),
				970 =>
				array(
					'Subject' => 'Elective III',
				),
				971 =>
				array(
					'Subject' => 'Elective IV',
				),
				972 =>
				array(
					'Subject' => 'Laboratory Practice III',
				),
				973 =>
				array(
					'Subject' => 'Laboratory Practice IV',
				),
				974 =>
				array(
					'Subject' => 'Project Work Stage II',
				),
				975 =>
				array(
					'Subject' => 'Audit Course 6',
				),
				976 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics',
				),
				977 =>
				array(
					'Subject' => 'Mathematics - 1',
				),
				978 =>
				array(
					'Subject' => 'Mathematics - 2',
				),
				979 =>
				array(
					'Subject' => 'Mathematics - 3',
				),
				980 =>
				array(
					'Subject' => 'Mathematics - 4',
				),
				981 =>
				array(
					'Subject' => 'Chemistry',
				),
				982 =>
				array(
					'subject_category' => 'Humanities',
					'credits' => '12',
				),
				983 =>
				array(
					'subject_category' => 'Other Engineering',
					'credits' => '33',
				),
				984 =>
				array(
					'subject_category' => 'CSE Core Courses',
					'credits' => '68',
				),
				985 =>
				array(
					'subject_category' => 'Open Elective Courses',
					'credits' => '3',
				),
				986 =>
				array(
					'subject_category' => 'Major Project',
					'credits' => '14',
				),
				987 =>
				array(
					'subject_category' => 'Other Mandatory Courses',
					'credits' => '9',
				),
				988 =>
				array(
					'subject_category' => 'Electives',
					'credits' => '15',
				),
				989 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ENGINEERING LABORATORY',
					'credits' => '2',
				),
				990 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'LINEAR ALGEBRA, NUMERICAL AND COMPLEX ANALYSIS',
					'credits' => '4',
				),
				991 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ENGINEERING DRAWING AND COMPUTER GRAPHICS',
					'credits' => '3',
				),
				992 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'PHYSICS OF WAVES',
					'credits' => '4',
				),
				993 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'CHEMISTRY',
					'credits' => '4',
				),
				994 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-II',
					'credits' => '1',
				),
				995 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'CHEMISTRY LABORATORY',
					'credits' => '2',
				),
				996 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ADVANCED CALCULUS',
					'credits' => '4',
				),
				997 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ELECTRICAL TECHNOLOGY',
					'credits' => '4',
				),
				998 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'PHYSICS LABORATORY',
					'credits' => '2',
				),
				999 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'PROGAMMING AND DATA STRUCTURES LABORATORY',
					'credits' => '2',
				),
				1000 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'DIY PROJECT',
					'credits' => '2',
				),
				1001 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ENVIRONMENTAL SCIENCE',
					'credits' => '2',
				),
				1002 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'SCIENCE OF LIVING SYSTEMS',
					'credits' => '2',
				),
				1003 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-I',
					'credits' => '1',
				),
				1004 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'BASIC ENGINEERING MECHANICS',
					'credits' => '4',
				),
				1005 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'PROGAMMING AND DATA STRUCTURES',
					'credits' => '3',
				),
				1006 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ENGLISH FOR COMMUNICATION',
					'credits' => '3',
				),
				1007 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'ANALOG CIRCUITS LABORATORY',
					'credits' => '2',
				),
				1008 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'NETWORK THEORY LABORATORY',
					'credits' => '2',
				),
				1009 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'DEVICES LABORATORY',
					'credits' => '2',
				),
				1010 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'NETWORK THEORY',
					'credits' => '4',
				),
				1011 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'ANALOG ELECTRONIC CIRCUITS',
					'credits' => '4',
				),
				1012 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-III',
					'credits' => '1',
				),
				1013 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'SEMICONDUCTOR DEVICES',
					'credits' => '4',
				),
				1014 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'PROBABILITY AND STATISTICS',
					'credits' => '3',
				),
				1015 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'DIGITAL CIRCUITS LABORATORY',
					'credits' => '2',
				),
				1016 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'ELECTROMAGNETIC ENGINEERING',
					'credits' => '4',
				),
				1017 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'DIGITAL ELECTRONIC CIRCUITS',
					'credits' => '4',
				),
				1018 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-IV',
					'credits' => '1',
				),
				1019 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'LINEAR ALGEBRA AND OPTIMIZATION MODELS',
					'credits' => '4',
				),
				1020 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'SIGNALS AND SYSTEMS',
					'credits' => '4',
				),
				1021 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'CONTROL SYSTEM ENGINEERING',
					'credits' => '4',
				),
				1022 =>
				array(
					'Subject' => 'Networks, Signals and Systems',
					'credits' => '4',
				),
				1023 =>
				array(
					'Subject' => 'Real Analysis',
					'credits' => '4',
				),
				1024 =>
				array(
					'Subject' => 'Digital Systems and Microcontrollers',
					'credits' => '5',
				),
				1025 =>
				array(
					'Subject' => 'Computer Programming',
					'credits' => '5',
				),
				1026 =>
				array(
					'Subject' => 'Electronic Workshop-1',
					'credits' => '2',
				),
				1027 =>
				array(
					'Subject' => 'Arts-1',
					'credits' => '2',
				),
				1028 =>
				array(
					'Subject' => 'Sports-1',
					'credits' => '1',
				),
				1029 =>
				array(
					'Subject' => 'Value Education-1',
					'credits' => '2',
				),
				1030 =>
				array(
					'Subject' => 'Data Structures and Algorithms',
					'credits' => '5',
				),
				1031 =>
				array(
					'Subject' => 'Linear Algebra',
					'credits' => '4',
				),
				1032 =>
				array(
					'Subject' => 'Analog Electronic Circuits',
					'credits' => '5',
				),
				1033 =>
				array(
					'Subject' => 'Information and Communication',
					'credits' => '4',
				),
				1034 =>
				array(
					'Subject' => 'Sports-2',
					'credits' => '1',
				),
				1035 =>
				array(
					'Subject' => 'Arts-2',
					'credits' => '2',
				),
				1036 =>
				array(
					'Subject' => 'Probability and Random Processes',
					'credits' => '4',
				),
				1037 =>
				array(
					'Subject' => 'Signal Processing',
					'credits' => '5',
				),
				1038 =>
				array(
					'Subject' => 'Systems Thinking (Commn, bio, neuro)',
					'credits' => '4',
				),
				1039 =>
				array(
					'Subject' => 'VLSI Design',
					'credits' => '4',
				),
				1040 =>
				array(
					'Subject' => 'Science-1',
					'credits' => '4',
				),
				1041 =>
				array(
					'Subject' => 'Sports-3',
					'credits' => '1',
				),
				1042 =>
				array(
					'Subject' => 'Communication Theory',
					'credits' => '4',
				),
				1043 =>
				array(
					'Subject' => 'Stream Foundation-1',
					'credits' => '4',
				),
				1044 =>
				array(
					'Subject' => 'Electronic Workshop-2',
					'credits' => '4',
				),
				1045 =>
				array(
					'Subject' => 'Intro to Human Sciences',
					'credits' => '4',
				),
				1046 =>
				array(
					'Subject' => 'Intro to Processer Architecture',
					'credits' => '2',
				),
				1047 =>
				array(
					'Subject' => 'Sports-4',
					'credits' => '1',
				),
				1048 =>
				array(
					'Subject' => 'Value Education-2',
					'credits' => '2',
				),
				1049 =>
				array(
					'Subject' => 'Stream Foundation-2',
					'credits' => '4',
				),
				1050 =>
				array(
					'Subject' => 'Stream Elective-1',
					'credits' => '4',
				),
				1051 =>
				array(
					'Subject' => 'Maths Elective',
					'credits' => '4',
				),
				1052 =>
				array(
					'Subject' => 'Open Elective-1',
					'credits' => '4',
				),
				1053 =>
				array(
					'Subject' => 'HSS Elective-1',
					'credits' => '4',
				),
				1054 =>
				array(
					'Subject' => 'Open Elective-2',
					'credits' => '4',
				),
				1055 =>
				array(
					'Subject' => 'Science-2',
					'credits' => '4',
				),
				1056 =>
				array(
					'Subject' => 'Stream Elective-2',
					'credits' => '4',
				),
				1057 =>
				array(
					'Subject' => 'B.Tech Project (BTP) - 1',
					'credits' => '2',
				),
				1058 =>
				array(
					'Subject' => 'HSS Elective-2',
					'credits' => '4',
				),
				1059 =>
				array(
					'Subject' => 'Stream Elective-3',
					'credits' => '4',
				),
				1060 =>
				array(
					'Subject' => 'Open Elective-3',
					'credits' => '4',
				),
				1061 =>
				array(
					'Subject' => 'Science Elective - 1',
					'credits' => '4',
				),
				1062 =>
				array(
					'Subject' => 'B.Tech Project (BTP) - 2',
					'credits' => '2',
				),
				1063 =>
				array(
					'Subject' => 'Ethics-1',
					'credits' => '2',
				),
				1064 =>
				array(
					'Subject' => 'Open Elective-4',
					'credits' => '4',
				),
				1065 =>
				array(
					'Subject' => 'Open Elective-5',
					'credits' => '4',
				),
				1066 =>
				array(
					'Subject' => 'Science Elective - 2',
					'credits' => '4',
				),
				1067 =>
				array(
					'Subject' => 'Ethics-2',
					'credits' => '2',
				),
				1068 =>
				array(
					'Subject' => 'HSS Elective-3',
					'credits' => '4',
				),
				1069 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Electronic Devices',
					'credits' => '3',
				),
				1070 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Electronics Devices Lab',
					'credits' => '1',
				),
				1071 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Digital System Design',
					'credits' => '3',
				),
				1072 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Digital System Design Lab',
					'credits' => '1',
				),
				1073 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Signals and Systems',
					'credits' => '3',
				),
				1074 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Network Theory',
					'credits' => '3',
				),
				1075 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Analog and Digital Communication',
					'credits' => '3',
				),
				1076 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Analog and Digital Communication Lab',
					'credits' => '1',
				),
				1077 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Analog Circuits',
					'credits' => '3',
				),
				1078 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Analog Circuits Lab',
					'credits' => '1',
				),
				1079 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Microcontrollers',
					'credits' => '3',
				),
				1080 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Microcontrollers Lab',
					'credits' => '1',
				),
				1081 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Electromagnetic Waves',
					'credits' => '3',
				),
				1082 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Electromagnetic Waves Lab',
					'credits' => '1',
				),
				1083 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Computer Architecture',
					'credits' => '3',
				),
				1084 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Probability     Theory     and     Stochastic
Processes',
					'credits' => '3',
				),
				1085 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Digital Signal Processing',
					'credits' => '3',
				),
				1086 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Digital Signal Processing Lab',
					'credits' => '1',
				),
				1087 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Control Systems',
					'credits' => '3',
				),
				1088 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Computer Networks',
					'credits' => '3',
				),
				1089 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Computer Network Lab',
					'credits' => '2',
				),
				1090 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Electronics Measurement Lab',
					'credits' => '1',
				),
				1091 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Mini         Project/Electronic         Design
workshop',
					'credits' => '2',
				),
				1092 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Microwave Theory and Techniques',
					'credits' => '3',
				),
				1093 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Fiber Optic Communications',
					'credits' => '3',
				),
				1094 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Information Theory and Coding',
					'credits' => '3',
				),
				1095 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Speech and Audio Processing',
					'credits' => '3',
				),
				1096 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Introduction to MEMS',
					'credits' => '3',
				),
				1097 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Adaptive Signal Processing',
					'credits' => '3',
				),
				1098 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Antennas and Propagation',
					'credits' => '3',
				),
				1099 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Bio-Medical Electronics',
					'credits' => '3',
				),
				1100 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Mobile Communication and Networks',
					'credits' => '3',
				),
				1101 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Digital Image & Video Processing',
					'credits' => '3',
				),
				1102 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Mixed Signal Design',
					'credits' => '3',
				),
				1103 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Wireless Sensor Networks',
					'credits' => '3',
				),
				1104 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'CMOS Design',
					'credits' => '3',
				),
				1105 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Power Electronics',
					'credits' => '3',
				),
				1106 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Satellite Communication',
					'credits' => '3',
				),
				1107 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'High Speed Electronics',
					'credits' => '3',
				),
				1108 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Wavelets',
					'credits' => '3',
				),
				1109 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Embedded systems',
					'credits' => '3',
				),
				1110 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Nano electronics',
					'credits' => '3',
				),
				1111 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Error correcting codes',
					'credits' => '3',
				),
				1112 =>
				array(
					'subject_category' => 'Professional Elective courses',
					'Subject' => 'Scientific computing',
					'credits' => '3',
				),
				1113 =>
				array(
					'subject_category' => 'Open Elective course (Electronics and Communication Engineering)',
					'credits' => '3',
				),
				1114 =>
				array(
					'subject_category' => 'Open Elective course (Electronics and Communication Engineering)',
					'credits' => '3',
				),
				1115 =>
				array(
					'subject_category' => 'Open Elective course (Electronics and Communication Engineering)',
					'credits' => '3',
				),
				1116 =>
				array(
					'subject_category' => 'Open Elective course (Electronics and Communication Engineering)',
					'credits' => '3',
				),
				1117 =>
				array(
					'subject_category' => 'Open Elective course (Electronics and Communication Engineering)',
					'credits' => '3',
				),
				1118 =>
				array(
					'subject_category' => 'Project',
					'Subject' => 'Project Work I',
					'credits' => '5',
				),
				1119 =>
				array(
					'subject_category' => 'Project',
					'Subject' => 'Project Work II & Dissertation',
					'credits' => '9',
				),
				1120 =>
				array(
					'subject_category' => 'Mandatory courses',
					'Subject' => 'Slot for MC',
					'credits' => '0',
				),
				1121 =>
				array(
					'subject_category' => 'Mandatory courses',
					'Subject' => 'Slot for MC[ Environmental Sc.]',
					'credits' => '0',
				),
				1122 =>
				array(
					'subject_category' => 'Mandatory courses',
					'Subject' => 'Slot for MC
[Constitution  of  India/Essence  of  Indian Traditional Knowledge]',
					'credits' => '0',
				),
				1123 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics',
				),
				1124 =>
				array(
					'Subject' => 'Mathematics - 1',
				),
				1125 =>
				array(
					'Subject' => 'Mathematics - 2',
				),
				1126 =>
				array(
					'Subject' => 'Mathematics - 3',
				),
				1127 =>
				array(
					'Subject' => 'Chemistry',
				),
				1128 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management course',
					'credits' => '12',
				),
				1129 =>
				array(
					'subject_category' => 'Other Engineering',
					'credits' => '33',
				),
				1130 =>
				array(
					'subject_category' => 'ECE Core Courses',
					'credits' => '68',
				),
				1131 =>
				array(
					'subject_category' => 'Open Elective course (Electronics and Communication Engineering)',
					'credits' => '3',
				),
				1132 =>
				array(
					'subject_category' => 'Major Project',
					'credits' => '14',
				),
				1133 =>
				array(
					'subject_category' => 'Other Mandatory Courses',
					'credits' => '9',
				),
				1134 =>
				array(
					'subject_category' => 'Electives',
					'credits' => '15',
				),
				1135 =>
				array(
					'subject_category' => 'HS',
					'Subject' => 'Communicative English and Soft Skills I',
				),
				1136 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Matrices and Calculus',
				),
				1137 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Engineering Physics',
				),
				1138 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Engineering Chemistry',
				),
				1139 =>
				array(
					'subject_category' => 'Engineering Science Course (Electronics and Communication Engineering)',
					'Subject' => 'Engineering Basics',
				),
				1140 =>
				array(
					'subject_category' => 'Engineering Science Course (Electronics and Communication Engineering)',
					'Subject' => 'Programming in C',
				),
				1141 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics and Chemistry Laboratory',
				),
				1142 =>
				array(
					'subject_category' => 'Engineering Science Course (Electronics and Communication Engineering)',
					'Subject' => 'Design Appreciation Laboratory',
				),
				1143 =>
				array(
					'subject_category' => 'Engineering Science Course (Electronics and Communication Engineering)',
					'Subject' => 'Programming in C Laboratory',
				),
				1144 =>
				array(
					'subject_category' => 'Humanities and Social Sciences',
					'Subject' => 'Technical English and Soft Skills II',
				),
				1145 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Vector Calculus and Complex Analysis',
				),
				1146 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Applied Science for Electronics and Information Engineering',
				),
				1147 =>
				array(
					'subject_category' => 'Engineering Science Course (Electronics and Communication Engineering)',
					'Subject' => 'Python Programming',
				),
				1148 =>
				array(
					'subject_category' => 'Engineering Science Course (Electronics and Communication Engineering)',
					'Subject' => 'Electric Circuits & Electronic Devices',
				),
				1149 =>
				array(
					'subject_category' => 'Engineering Science Course (Electronics and Communication Engineering)',
					'Subject' => 'Engineering Graphics & Design ',
				),
				1150 =>
				array(
					'subject_category' => 'Non Credit Mandatory',
					'Subject' => 'Environmental Science',
				),
				1151 =>
				array(
					'subject_category' => 'Engineering Science',
					'Subject' => 'Python Programming Laboratory',
				),
				1152 =>
				array(
					'subject_category' => 'Engineering Science',
					'Subject' => 'Electric Circuits & Electronic Devices Laboratory',
				),
				1153 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Transforms and Linear Algebra ',
				),
				1154 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Electronic Circuits ',
				),
				1155 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Digital Electronics',
				),
				1156 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Signals and Systems',
				),
				1157 =>
				array(
					'subject_category' => 'Non Credit Mandatory',
					'Subject' => 'Essence of Indian Traditional Knowledge',
				),
				1158 =>
				array(
					'subject_category' => 'Employment  Enhancement Course',
					'Subject' => 'Soft Skills and Aptitude 1',
				),
				1159 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Electronic Circuits and Simulation Laboratory',
				),
				1160 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Digital Logic Design Laboratory',
				),
				1161 =>
				array(
					'subject_category' => 'Engineering Science',
					'Subject' => 'Electronics Design Practice Laboratory I',
				),
				1162 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Applied Probability and Random Processes',
				),
				1163 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Analog and Digital Communication',
				),
				1164 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Linear Integrated Circuits',
				),
				1165 =>
				array(
					'subject_category' => 'Engineering Science Course (Electronics and Communication Engineering)',
					'Subject' => 'Electromagnetic Field Theory',
				),
				1166 =>
				array(
					'subject_category' => 'Professional Elective course (Electronics and Communication Engineering)',
					'Subject' => 'Professional Elective 1',
				),
				1167 =>
				array(
					'subject_category' => 'Open Elective course (Electronics and Communication Engineering)',
					'Subject' => 'Open Elective 1',
				),
				1168 =>
				array(
					'subject_category' => 'Employment  Enhancement Course',
					'Subject' => 'Soft Skills and Aptitude II',
				),
				1169 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Analog and Digital Communications Laboratory',
				),
				1170 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Linear Integrated Circuits Laboratory',
				),
				1171 =>
				array(
					'subject_category' => 'Engineering Science Course (Electronics and Communication Engineering)',
					'Subject' => 'Microprocessors and Microcontrollers (Integrated)',
				),
				1172 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Discrete Time Signal Processing',
				),
				1173 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Transmission Lines and RF Systems',
				),
				1174 =>
				array(
					'subject_category' => 'Professional Elective course (Electronics and Communication Engineering)',
					'Subject' => 'Professional Elective 2',
				),
				1175 =>
				array(
					'subject_category' => 'Open Elective course (Electronics and Communication Engineering)',
					'Subject' => 'Open Elective 2',
				),
				1176 =>
				array(
					'subject_category' => 'Humanities and Social Sciences',
					'Subject' => 'Technical Skills  and Aptitude I ',
				),
				1177 =>
				array(
					'subject_category' => 'Humanities and Social Sciences',
					'Subject' => 'Professional Communication',
				),
				1178 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Discrete Time Signal Processing Laboratory',
				),
				1179 =>
				array(
					'subject_category' => 'Engineering Science',
					'Subject' => 'Electronics Design Practice Laboratory  II',
				),
				1180 =>
				array(
					'subject_category' => 'Employment  Enhancement Course',
					'Subject' => 'Mini Project ',
				),
				1181 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Communication Networks ',
				),
				1182 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'VLSI Design',
				),
				1183 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Antennas and Microwave Engineering',
				),
				1184 =>
				array(
					'subject_category' => 'Professional Elective course (Electronics and Communication Engineering)',
					'Subject' => 'Professional Elective 3 ',
				),
				1185 =>
				array(
					'subject_category' => 'Open Elective course (Electronics and Communication Engineering)',
					'Subject' => 'Open Elective 3 ',
				),
				1186 =>
				array(
					'subject_category' => 'Humanities and Social Sciences',
					'Subject' => 'Technical Skills  and Aptitude II ',
				),
				1187 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Communication  Networks Laboratory',
				),
				1188 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'VLSI Design Laboratory ',
				),
				1189 =>
				array(
					'subject_category' => 'Employment  Enhancement Course',
					'Subject' => 'Internship/In-plant training ',
				),
				1190 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Optical Communication and Optical Sensors',
				),
				1191 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Embedded  Systems and Product Design ',
				),
				1192 =>
				array(
					'subject_category' => 'Professional Elective course (Electronics and Communication Engineering)',
					'Subject' => 'Professional Elective  4 ',
				),
				1193 =>
				array(
					'subject_category' => 'Professional Elective course (Electronics and Communication Engineering)',
					'Subject' => 'Professional Elective  5',
				),
				1194 =>
				array(
					'subject_category' => 'Open Elective course (Electronics and Communication Engineering)',
					'Subject' => 'Open Elective 4',
				),
				1195 =>
				array(
					'subject_category' => 'Humanities and Social Sciences',
					'Subject' => 'Entrepreneurship for Engineers ',
				),
				1196 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Optical and Microwave Laboratory ',
				),
				1197 =>
				array(
					'subject_category' => 'Professional core course (Electronics and Communication Engineering)',
					'Subject' => 'Embedded System  Design Laboratory',
				),
				1198 =>
				array(
					'subject_category' => 'Employment  Enhancement Course',
					'Subject' => 'Project Work - Phase – 1 ',
				),
				1199 =>
				array(
					'subject_category' => 'Non Credit Mandatory',
					'Subject' => 'Indian Constitution  ',
				),
				1200 =>
				array(
					'subject_category' => 'Employment  Enhancement Course',
					'Subject' => 'Project Work – Phase -2 ',
				),
				1201 =>
				array(
					'subject_category' => 'Employment  Enhancement Course',
					'Subject' => 'Comprehension & Technical Seminar',
				),
				1202 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'ENGINEERING PHYSICS',
				),
				1203 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'ENGINEERING PHYSICS LABORATORY',
				),
				1204 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'MATHEMATICS FOR ENGINEERS',
				),
				1205 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'DIFFERENTIAL EQUATIONS AND VECTOR CALCULUS',
				),
				1206 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'DISCRETE MATHEMATICS',
				),
				1207 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'COMPUTER PROGRAMMING',
				),
				1208 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'OBJECT ORIENTED PROGRAMMING',
				),
				1209 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'INTERNET PROGRAMMING LABORATORY',
				),
				1210 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'DIGITAL ELECTRONICS',
				),
				1211 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'DIGITAL ELECTRONICS LABORATORY',
				),
				1212 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'DATA STRUCTURES AND ALGORITHMS',
				),
				1213 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'COMPUTER NETWORKS',
				),
				1214 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'INTERNETWORKING ESSENTIALS',
				),
				1215 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'SOFTWARE ENGINEERING',
				),
				1216 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'COMMUNITY DEVELOPMENT PROJECT',
				),
				1217 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'PYTHON PROGRAMMING',
				),
				1218 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'DATABASE MANAGEMENT SYSTEMS',
				),
				1219 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'COMPUTER ORGANIZATION AND DESIGN',
				),
				1220 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'PROGRAMMING IN JAVA',
				),
				1221 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'OPERATING SYSTEMS',
				),
				1222 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'OPERATING SYSTEMS LABORATORY',
				),
				1223 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'DESIGN AND ANALYSIS OF ALGORITHMS',
				),
				1224 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'ARTIFICIAL INTELLIGENCE',
				),
				1225 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'PROBABILITY AND STATISTICS',
				),
				1226 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'FORMAL LANGUAGES AND AUTOMATION THEORY',
				),
				1227 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'INDUSTRY ETHICS AND LEGAL ISSUES',
				),
				1228 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'VIRTUALIZATION AND CLOUD COMPUTING',
				),
				1229 =>
				array(
					'subject_category' => 'Discipline Core',
					'Subject' => 'VIRTUALIZATION AND CLOUD COMPUTING LABORATORY',
				),
				1230 =>
				array(
					'subject_category' => 'Deoartmental Elective',
					'Subject' => 'ADVANCED JAVA PROGRAMMING',
				),
				1231 =>
				array(
					'subject_category' => 'Engineering Minor 1',
					'Subject' => 'CYBER SECURITY ESSENTIALS',
				),
				1232 =>
				array(
					'subject_category' => 'Engineering Minor 2',
					'Subject' => 'INTRODUCTION TO IOT NETWORKING PROTOCOLS',
				),
				1233 =>
				array(
					'subject_category' => 'Engineering Minor 3',
					'Subject' => 'DIGITAL EVIDENCE ANALYSIS',
				),
				1234 =>
				array(
					'subject_category' => 'Engineering Minor 4',
					'Subject' => 'SECURING COMPUTING SYSTEMS',
				),
				1235 =>
				array(
					'subject_category' => 'Engineering Minor 5',
					'Subject' => 'PENETRATION TESTING',
				),
				1236 =>
				array(
					'subject_category' => 'Engineering Minor 6',
					'Subject' => 'MALWARE ANALYSIS AND CYBER DEFENCE',
				),
				1237 =>
				array(
					'subject_category' => 'Engineering Science',
					'Subject' => 'ENGINEERING GRAPHICS',
				),
				1238 =>
				array(
					'subject_category' => 'Engineering Science',
					'Subject' => 'BASIC ENGINEERING MECHANICS',
				),
				1239 =>
				array(
					'subject_category' => 'Engineering Science',
					'Subject' => 'BASIC ELECTRICAL AND ELECTRONICS ENGINEERING',
				),
				1240 =>
				array(
					'subject_category' => 'Engineering Science',
					'Subject' => 'BASIC ELECTRICAL AND ELECTRONICS ENGINEERING LABORATORY',
				),
				1241 =>
				array(
					'subject_category' => 'Environment Course',
					'Subject' => 'ENVIRONMENTAL STUDIES',
				),
				1242 =>
				array(
					'subject_category' => 'Lanaguage  Course 1  ',
					'Subject' => 'SOFT SKILLS-I',
				),
				1243 =>
				array(
					'subject_category' => 'Lanaguage Course 2',
					'Subject' => 'COMMUNICATION SKILLS-I',
				),
				1244 =>
				array(
					'subject_category' => 'Lanaguage Course 3 ',
					'Subject' => 'COMMUNICATION SKILLS-II',
				),
				1245 =>
				array(
					'subject_category' => 'Lanaguage Course 4',
					'Subject' => 'VERBAL ABILITY-I',
				),
				1246 =>
				array(
					'subject_category' => 'OPEN MINOR/OPEN ELECTIVE 1',
					'Subject' => 'OPEN MINOR/OPEN ELECTIVE 1',
				),
				1247 =>
				array(
					'subject_category' => 'OPEN MINOR/OPEN ELECTIVE 2',
					'Subject' => 'OPEN MINOR/OPEN ELECTIVE 2',
				),
				1248 =>
				array(
					'subject_category' => 'OPEN MINOR/OPEN ELECTIVE 3',
					'Subject' => 'OPEN MINOR/OPEN ELECTIVE 3',
				),
				1249 =>
				array(
					'subject_category' => 'OPEN MINOR/OPEN ELECTIVE 4',
					'Subject' => 'OPEN MINOR/OPEN ELECTIVE 4',
				),
				1250 =>
				array(
					'subject_category' => 'Pathway elective 1',
					'Subject' => 'ANALYTICAL SKILLS-I',
				),
				1251 =>
				array(
					'subject_category' => 'Pathway elective 2',
					'Subject' => 'COMBINATORIAL STUDIES-I',
				),
				1252 =>
				array(
					'subject_category' => 'Pathway elective 3',
					'Subject' => 'COMBINATORIAL STUDIES-II',
				),
				1253 =>
				array(
					'subject_category' => 'Pathway elective 4',
					'Subject' => 'COMBINATORIAL STUDIES-III',
				),
				1254 =>
				array(
					'subject_category' => 'Project',
					'Subject' => 'CAPSTONE PROJECT-I',
				),
				1255 =>
				array(
					'subject_category' => 'Project',
					'Subject' => 'CAPSTONE PROJECT-II',
				),
				1256 =>
				array(
					'subject_category' => 'Training Elective',
					'Subject' => 'SEMINAR ON SUMMER TRAINING',
				),
				1257 =>
				array(
					'Subject' => 'Engineering Mathematics – III',
				),
				1258 =>
				array(
					'Subject' => 'Discrete Mathematics',
				),
				1259 =>
				array(
					'Subject' => 'Data Structures',
				),
				1260 =>
				array(
					'Subject' => 'Computer Architecture & Organization',
				),
				1261 =>
				array(
					'Subject' => 'Elective –I  
(a) Object - oriented Programming in C++ 
(b) Object Oriented Programming in Java',
				),
				1262 =>
				array(
					'Subject' => 'Data Structures Lab & Object Oriented Programming Lab',
				),
				1263 =>
				array(
					'Subject' => 'Seminar – I',
				),
				1264 =>
				array(
					'Subject' => 'Field Training / Internship / Industrial Training Evaluation',
				),
				1265 =>
				array(
					'Subject' => 'Design & Analysis of Algorithms',
				),
				1266 =>
				array(
					'Subject' => 'Operating Systems',
				),
				1267 =>
				array(
					'Subject' => 'Basic Human Rights',
				),
				1268 =>
				array(
					'Subject' => 'Probability Theory and Random Processes',
				),
				1269 =>
				array(
					'Subject' => 'Digital Logic Design & Microprocessors',
				),
				1270 =>
				array(
					'Subject' => 'Operating Systems & Python Programming Lab',
				),
				1271 =>
				array(
					'Subject' => 'Seminar – II',
				),
				1272 =>
				array(
					'Subject' => 'Field Training / Internship / Industrial Training Evaluation',
				),
				1273 =>
				array(
					'Subject' => 'Database Systems',
				),
				1274 =>
				array(
					'Subject' => 'Theory of Computations',
				),
				1275 =>
				array(
					'Subject' => 'Machine Learning',
				),
				1276 =>
				array(
					'Subject' => 'Elective-III
(A) Introduction to Research
(B) Cyber Laws
(C) Open Elective offered by other departments',
				),
				1277 =>
				array(
					'Subject' => 'Elective-IV
(A) Economics & Management
(B) Business Communication',
				),
				1278 =>
				array(
					'Subject' => 'Competitive Programming-I',
				),
				1279 =>
				array(
					'Subject' => 'Database System Laboratory',
				),
				1280 =>
				array(
					'Subject' => 'Machine Learning Laboratory',
				),
				1281 =>
				array(
					'Subject' => 'Seminar',
				),
				1282 =>
				array(
					'Subject' => 'Internship/Industrial Training',
				),
				1283 =>
				array(
					'Subject' => 'Compiler Design',
				),
				1284 =>
				array(
					'Subject' => 'Computer Networks',
				),
				1285 =>
				array(
					'Subject' => 'Elective-V
(A) Human Computer Interaction
(B) Artificial Intelligence
(C) Object-Oriented Analysis Design',
				),
				1286 =>
				array(
					'Subject' => 'Elective-VI
(A) Geographic Information System
(B) Biology
(C) Internet of Things',
				),
				1287 =>
				array(
					'Subject' => 'Open Elective-VII
(A) Development Engineering
(B) National Social Service
(C) Consumer Behaviour',
				),
				1288 =>
				array(
					'Subject' => 'Competitive Programming-II',
				),
				1289 =>
				array(
					'Subject' => 'Internet of Things Laboratory',
				),
				1290 =>
				array(
					'Subject' => 'Computer Networks Laboratory',
				),
				1291 =>
				array(
					'Subject' => 'Software Engineering',
				),
				1292 =>
				array(
					'Subject' => 'Elective - VIII
(A) Big Data Analytics
(B) Distributed System
(C) Fundamental of Digital Image Processing',
				),
				1293 =>
				array(
					'Subject' => 'Elective - IX
(A) Cloud Computing
(B) Business Intelligence
(C) Natural Language
Processing',
				),
				1294 =>
				array(
					'Subject' => 'Open Elective - X
(A) Blockchain Technology
(B) Computer Graphics
(C) Embedded Systems
(D) Design Thinking',
				),
				1295 =>
				array(
					'Subject' => 'Full Stack Development (LAMP / MEAN)',
				),
				1296 =>
				array(
					'Subject' => 'System Administration',
				),
				1297 =>
				array(
					'Subject' => 'Project phase - I',
				),
				1298 =>
				array(
					'Subject' => 'Field Training / Internship / Industrial Training',
				),
				1299 =>
				array(
					'Subject' => 'Elective – XI
(A) Deep Learning
(B) Social Networks
(C) Randomized Algorithms',
				),
				1300 =>
				array(
					'Subject' => 'Open Elective – XII
(A) Introduction to Industry 4.0 and Industrial
Internet of Things
(B) Cryptography and Network Security
(C) Model Checking',
				),
				1301 =>
				array(
					'Subject' => 'Project phase - II (In-house)  /
Internship and project in the Industry',
				),
				1302 =>
				array(
					'subject_category' => 'Engineering Science Courses',
					'Subject' => 'Problem Solving and Computer Programming',
					'credits' => '4',
				),
				1303 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Matrix Theory and Differential Calculus',
					'credits' => '3',
				),
				1304 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Chemistry for Mechanical Engineering',
					'credits' => '2',
				),
				1305 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Introduction to Mechanical Engineering',
					'credits' => '3',
				),
				1306 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Design Thinking',
					'credits' => '3',
				),
				1307 =>
				array(
					'subject_category' => 'Engineering Science Courses',
					'Subject' => 'Engineering Graphics',
					'credits' => '3',
				),
				1308 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Workshop Practice',
					'credits' => '1.5',
				),
				1309 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Chemistry laboratory for Mechanical Engineering',
					'credits' => '1',
				),
				1310 =>
				array(
					'subject_category' => 'Mandatory Non-credit Courses',
					'Subject' => 'MNC-1 (Induction Program) *',
					'credits' => '0',
				),
				1311 =>
				array(
					'subject_category' => 'Mandatory Non-credit Courses',
					'Subject' => 'MNC-2 (EAA) *',
					'credits' => '0',
				),
				1312 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Integral Calculus and Numerical Methods',
					'credits' => '3',
				),
				1313 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics for Mechanical Engineering',
					'credits' => '2',
				),
				1314 =>
				array(
					'subject_category' => 'Humanities and Social Science Courses',
					'Subject' => 'Communication Skills and Report Writing',
					'credits' => '3',
				),
				1315 =>
				array(
					'subject_category' => 'Engineering Science Courses',
					'Subject' => 'Engineering Mechanics',
					'credits' => '3',
				),
				1316 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Design Studio',
					'credits' => '1.5',
				),
				1317 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Kinematics of Machinery',
					'credits' => '3',
				),
				1318 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Engineering Computation Laboratory',
					'credits' => '1',
				),
				1319 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics laboratory for Mechanical Engineering',
					'credits' => '1',
				),
				1320 =>
				array(
					'subject_category' => 'Mandatory Non-credit Courses',
					'Subject' => 'MNC-3 (EAA) *',
					'credits' => '0',
				),
				1321 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Transformation Techniques and
Statistics',
					'credits' => '3',
				),
				1322 =>
				array(
					'subject_category' => 'Engineering Science Courses',
					'Subject' => 'Materials Engineering',
					'credits' => '3',
				),
				1323 =>
				array(
					'subject_category' => 'Engineering Science Courses',
					'Subject' => 'Mechanics of Solids',
					'credits' => '3',
				),
				1324 =>
				array(
					'subject_category' => 'Engineering Science Courses',
					'Subject' => 'Fluid Mechanics and Hydraulic
Machines',
					'credits' => '3',
				),
				1325 =>
				array(
					'subject_category' => 'Engineering Science Courses',
					'Subject' => 'Basic Electrical and Electronics
Engineering',
					'credits' => '2',
				),
				1326 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Thermodynamics',
					'credits' => '3',
				),
				1327 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Dynamics of Machinery',
					'credits' => '3',
				),
				1328 =>
				array(
					'subject_category' => 'Engineering Science Courses',
					'Subject' => 'Material Testing Laboratory',
					'credits' => '1',
				),
				1329 =>
				array(
					'subject_category' => 'Engineering Science Courses',
					'Subject' => 'Fluid Mechanics and Hydraulic
Machines Laboratory',
					'credits' => '1',
				),
				1330 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Kinematics and Dynamics Laboratory',
					'credits' => '1',
				),
				1331 =>
				array(
					'subject_category' => 'Humanities and Social Science Courses',
					'Subject' => 'Engineering Economics and Costing',
					'credits' => '3',
				),
				1332 =>
				array(
					'subject_category' => 'Engineering Science Courses',
					'Subject' => 'Electrical Machines and Controls',
					'credits' => '4',
				),
				1333 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Manufacturing Science',
					'credits' => '3',
				),
				1334 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Design of Machine Elements',
					'credits' => '3',
				),
				1335 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Heat Transfer',
					'credits' => '3',
				),
				1336 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Prime Movers for Automobiles',
					'credits' => '3',
				),
				1337 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Heat Transfer and Fuels Laboratory',
					'credits' => '1',
				),
				1338 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Manufacturing Science Laboratory',
					'credits' => '1.5',
				),
				1339 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Computer Aided Machine Drawing',
					'credits' => '1.5',
				),
				1340 =>
				array(
					'subject_category' => 'Mandatory Non-credit Courses',
					'Subject' => 'MNC-4 *',
					'credits' => '0',
				),
				1341 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Geometric Modelling for CAD',
					'credits' => '3',
				),
				1342 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Machine Tools and Metrology',
					'credits' => '3',
				),
				1343 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Mechanical Measurements',
					'credits' => '4',
				),
				1344 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Design of Transmission Elements',
					'credits' => '3',
				),
				1345 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Management Science and
Productivity',
					'credits' => '3',
				),
				1346 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Thermal Machines',
					'credits' => '3',
				),
				1347 =>
				array(
					'subject_category' => 'Professional Elective Courses',
					'Subject' => 'Department Elective – I',
					'credits' => '3',
				),
				1348 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Thermal Engineering Laboratory',
					'credits' => '1.5',
				),
				1349 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Refrigeration and Air-Conditioning',
					'credits' => '3',
				),
				1350 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Machining Science',
					'credits' => '3',
				),
				1351 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Mechatronics',
					'credits' => '3',
				),
				1352 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Operations Planning and Control',
					'credits' => '3',
				),
				1353 =>
				array(
					'subject_category' => 'Professional Elective Courses',
					'Subject' => 'Department Elective – II',
					'credits' => '3',
				),
				1354 =>
				array(
					'subject_category' => 'Open Elective Courses',
					'Subject' => 'Open Elective – I #',
					'credits' => '3',
				),
				1355 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Mechatronics Laboratory',
					'credits' => '1',
				),
				1356 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'CFD Laboratory',
					'credits' => '2',
				),
				1357 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Machining and Metrology Laboratory',
					'credits' => '1.5',
				),
				1358 =>
				array(
					'subject_category' => 'Mandatory Non-credit Courses',
					'Subject' => 'MNC-5 *',
					'credits' => '0',
				),
				1359 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Robotics',
					'credits' => '3',
				),
				1360 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Computer Aided Manufacturing
(CAM)',
					'credits' => '3',
				),
				1361 =>
				array(
					'subject_category' => 'Professional Elective Courses',
					'Subject' => 'Department Elective – III',
					'credits' => '3',
				),
				1362 =>
				array(
					'subject_category' => 'Professional Elective Courses',
					'Subject' => 'Department Elective - IV',
					'credits' => '3',
				),
				1363 =>
				array(
					'subject_category' => 'Open Elective Courses',
					'Subject' => 'Open Elective – II #',
					'credits' => '3',
				),
				1364 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'CAM Laboratory',
					'credits' => '1',
				),
				1365 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Computer Aided Engineering (CAE)
Laboratory',
					'credits' => '1',
				),
				1366 =>
				array(
					'subject_category' => 'Professional Core Courses',
					'Subject' => 'Summer Internship/EPICS',
					'credits' => '2',
				),
				1367 =>
				array(
					'subject_category' => 'Professional Elective Courses',
					'Subject' => 'Department Elective- V',
					'credits' => '3',
				),
				1368 =>
				array(
					'subject_category' => 'Professional Elective Courses',
					'Subject' => 'Department Elective -VI',
					'credits' => '3',
				),
				1369 =>
				array(
					'subject_category' => 'SEMINAR',
					'Subject' => 'Seminar',
					'credits' => '1',
				),
				1370 =>
				array(
					'subject_category' => 'Project Course',
					'Subject' => 'Project Work @',
					'credits' => '4',
				),
				1371 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Functions of several variables',
					'credits' => '10',
				),
				1372 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics 1',
					'credits' => '10',
				),
				1373 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Introduction to programming',
					'credits' => '12',
				),
				1374 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Thermodynamics',
					'credits' => '10',
				),
				1375 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics lab',
					'credits' => '4',
				),
				1376 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Chemistry lab',
					'credits' => '3',
				),
				1377 =>
				array(
					'Subject' => 'Life Skills I',
					'credits' => '0',
				),
				1378 =>
				array(
					'Subject' => 'Ecology and Environment',
					'credits' => '0',
				),
				1379 =>
				array(
					'Subject' => 'NCC (NC1010)/NSO (NS1020)/NSO(NS1030)',
					'credits' => '0',
				),
				1380 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Workshop I',
					'credits' => '3',
				),
				1381 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Series and matrices',
					'credits' => '10',
				),
				1382 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics 2',
					'credits' => '10',
				),
				1383 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Chemistry',
					'credits' => '10',
				),
				1384 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Engineering Mechanics',
					'credits' => '10',
				),
				1385 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Engineering drawing',
					'credits' => '7',
				),
				1386 =>
				array(
					'subject_category' => 'Humanities',
					'Subject' => 'Humanities elective 1',
					'credits' => '9',
				),
				1387 =>
				array(
					'Subject' => 'Life Skills II',
					'credits' => '0',
				),
				1388 =>
				array(
					'Subject' => 'NCC (NC1010)/NSO (NS1020)/NSO(NS1030)',
					'credits' => '0',
				),
				1389 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Workshop II',
					'credits' => '3',
				),
				1390 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Differential equations',
					'credits' => '9',
				),
				1391 =>
				array(
					'subject_category' => 'Humanities',
					'Subject' => 'Basic electrical engineering',
					'credits' => '10',
				),
				1392 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Strength of materials',
					'credits' => '10',
				),
				1393 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Foundations of fluid mechanics',
					'credits' => '10',
				),
				1394 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Kinematics and dynamics of machinery',
					'credits' => '10',
				),
				1395 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Applied mechanics/ Fluid mechanics lab',
					'credits' => '3',
				),
				1396 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics elective',
					'credits' => '9',
				),
				1397 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Applied thermal engineering',
					'credits' => '10',
				),
				1398 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Materials and design',
					'credits' => '10',
				),
				1399 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Manufacturing processes',
					'credits' => '10',
				),
				1400 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Measurements and instrumentation',
					'credits' => '11',
				),
				1401 =>
				array(
					'subject_category' => 'Humanities',
					'Subject' => 'Humanities elective 2',
					'credits' => '9',
				),
				1402 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Heat transfer',
					'credits' => '10',
				),
				1403 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Energy conversion systems',
					'credits' => '10',
				),
				1404 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Design of machine elements',
					'credits' => '10',
				),
				1405 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Manufacturing technology',
					'credits' => '10',
				),
				1406 =>
				array(
					'Subject' => 'Free elective 1',
					'credits' => '9',
				),
				1407 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Mechanical engineering lab 1',
					'credits' => '3',
				),
				1408 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Machine drawing practice',
					'credits' => '7',
				),
				1409 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Professional elective 1',
					'credits' => '9',
				),
				1410 =>
				array(
					'Subject' => 'Free elective 2',
					'credits' => '9',
				),
				1411 =>
				array(
					'Subject' => 'Free elective 3',
					'credits' => '9',
				),
				1412 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Life sciences',
					'credits' => '9',
				),
				1413 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Automation in manufacturing',
					'credits' => '10',
				),
				1414 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Mechanical engineering lab 2',
					'credits' => '3',
				),
				1415 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Mechanical engineering lab 3',
					'credits' => '3',
				),
				1416 =>
				array(
					'Subject' => 'Honors elective 1',
					'credits' => '9',
				),
				1417 =>
				array(
					'Subject' => 'Summer Internship',
					'credits' => '0',
				),
				1418 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Professional elective 2',
					'credits' => '9',
				),
				1419 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Professional elective 3',
					'credits' => '9',
				),
				1420 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Professional or Free elective 4',
					'credits' => '9',
				),
				1421 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Professional or Free elective 5',
					'credits' => '9',
				),
				1422 =>
				array(
					'subject_category' => 'Profession',
					'Subject' => 'Professional or Free elective 6',
					'credits' => '9',
				),
				1423 =>
				array(
					'subject_category' => 'Humanities',
					'Subject' => 'Humanities elective 3',
					'credits' => '9',
				),
				1424 =>
				array(
					'subject_category' => 'Humanities',
					'Subject' => 'Professional ethics',
					'credits' => '0',
				),
				1425 =>
				array(
					'Subject' => 'Honors elective 2',
					'credits' => '9',
				),
				1426 =>
				array(
					'Subject' => 'Professional or Free elective 4 or Project',
					'credits' => '9',
				),
				1427 =>
				array(
					'Subject' => 'Professional or Free elective 5 or Project',
					'credits' => '9',
				),
				1428 =>
				array(
					'Subject' => 'Professional or Free elective 6 or Project',
					'credits' => '9',
				),
				1429 =>
				array(
					'Subject' => 'Free elective 7',
					'credits' => '9',
				),
				1430 =>
				array(
					'Subject' => 'Free elective 8',
					'credits' => '9',
				),
				1431 =>
				array(
					'Subject' => 'Honors elective 3',
					'credits' => '9',
				),
				1432 =>
				array(
					'Subject' => 'Calculus - I',
					'credits' => '1',
				),
				1433 =>
				array(
					'Subject' => 'Calculus - II',
					'credits' => '1',
				),
				1434 =>
				array(
					'Subject' => 'Modern Physics',
					'credits' => '2',
				),
				1435 =>
				array(
					'Subject' => 'Environmental Chemistry-i',
					'credits' => '1',
				),
				1436 =>
				array(
					'Subject' => 'Introduction to Programming',
					'credits' => '3',
				),
				1437 =>
				array(
					'Subject' => 'English Communication',
					'credits' => '2',
				),
				1438 =>
				array(
					'Subject' => 'Engineering Drawing',
					'credits' => '2',
				),
				1439 =>
				array(
					'Subject' => 'Fabrication Lab-1',
					'credits' => '2',
				),
				1440 =>
				array(
					'Subject' => 'Elementary Linear Algebra',
					'credits' => '1',
				),
				1441 =>
				array(
					'Subject' => 'Differential Equations',
					'credits' => '1',
				),
				1442 =>
				array(
					'Subject' => 'Introduction to Life Sciences',
					'credits' => '1',
				),
				1443 =>
				array(
					'Subject' => 'Personality Development',
					'credits' => '1',
				),
				1444 =>
				array(
					'Subject' => 'Engineering Mechanics',
					'credits' => '3',
				),
				1445 =>
				array(
					'Subject' => 'Thermodynamics',
					'credits' => '3',
				),
				1446 =>
				array(
					'Subject' => 'Automation Lab',
					'credits' => '1',
				),
				1447 =>
				array(
					'Subject' => 'Fabrication Lab- II',
					'credits' => '2',
				),
				1448 =>
				array(
					'Subject' => 'Digital Fabrication',
					'credits' => '2',
				),
				1449 =>
				array(
					'Subject' => 'Introduction to AI',
					'credits' => '1',
				),
				1450 =>
				array(
					'Subject' => 'Introduction to Entrepreneurship',
					'credits' => '1',
				),
				1451 =>
				array(
					'Subject' => 'Introduction to Probability',
					'credits' => '1',
				),
				1452 =>
				array(
					'Subject' => 'Transform Techniques',
					'credits' => '1',
				),
				1453 =>
				array(
					'Subject' => 'Fundamentals of Physical Metallurgy',
					'credits' => '3',
				),
				1454 =>
				array(
					'Subject' => 'Solid Mechanics',
					'credits' => '3',
				),
				1455 =>
				array(
					'Subject' => 'Fluid Mechanics',
					'credits' => '3',
				),
				1456 =>
				array(
					'Subject' => 'Fluid Mechanics Lab',
					'credits' => '1',
				),
				1457 =>
				array(
					'Subject' => 'Electives (la/free)*',
					'credits' => '3',
				),
				1458 =>
				array(
					'Subject' => 'Introduction to Statistics',
					'credits' => '1',
				),
				1459 =>
				array(
					'Subject' => 'Complex Variables',
					'credits' => '1',
				),
				1460 =>
				array(
					'Subject' => 'Physics Lab',
					'credits' => '2',
				),
				1461 =>
				array(
					'Subject' => 'Basic Electrical Engineering',
					'credits' => '3',
				),
				1462 =>
				array(
					'Subject' => 'Manufacturing Science -1',
					'credits' => '3',
				),
				1463 =>
				array(
					'Subject' => 'Heat and Mass Transfer',
					'credits' => '3',
				),
				1464 =>
				array(
					'Subject' => 'Kinematics and Dynamics of Mechanisms',
					'credits' => '3',
				),
				1465 =>
				array(
					'Subject' => 'Solid Mechanics Lab',
					'credits' => '1',
				),
				1466 =>
				array(
					'Subject' => 'Instrumentation',
					'credits' => '2',
				),
				1467 =>
				array(
					'Subject' => 'Manufacturing Science - II',
					'credits' => '2',
				),
				1468 =>
				array(
					'Subject' => 'Modeling and Simulation',
					'credits' => '3',
				),
				1469 =>
				array(
					'Subject' => 'Power and Refregiration System',
					'credits' => '2',
				),
				1470 =>
				array(
					'Subject' => 'FEM and CFD Theory',
					'credits' => '3',
				),
				1471 =>
				array(
					'Subject' => 'Finite Element Methods Lab',
					'credits' => '1',
				),
				1472 =>
				array(
					'Subject' => 'Computational Fluid Dynamics Lab',
					'credits' => '1',
				),
				1473 =>
				array(
					'Subject' => 'Design of Machine Elements',
					'credits' => '3',
				),
				1474 =>
				array(
					'Subject' => 'Heat Transfer Lab',
					'credits' => '1',
				),
				1475 =>
				array(
					'Subject' => 'Manufacturing Lab',
					'credits' => '1',
				),
				1476 =>
				array(
					'Subject' => 'Mini-project',
					'credits' => '3',
				),
				1477 =>
				array(
					'Subject' => 'Machine Drawing and Solid Modelling',
					'credits' => '2',
				),
				1478 =>
				array(
					'Subject' => 'Internship  (or  Equal  Credits  of  Department  Electives in Their Place)',
					'credits' => '6',
				),
				1479 =>
				array(
					'Subject' => 'Electives (la/free)*',
					'credits' => '7',
				),
				1480 =>
				array(
					'Subject' => 'IC Engines',
					'credits' => '3',
				),
				1481 =>
				array(
					'Subject' => 'Mathematical Elements for Geometrical Modeling',
					'credits' => '1.5',
				),
				1482 =>
				array(
					'Subject' => 'Computer Integrated Manufacturing',
					'credits' => '1.5',
				),
				1483 =>
				array(
					'Subject' => 'Control Systems',
					'credits' => '3',
				),
				1484 =>
				array(
					'Subject' => 'Elective Project',
					'credits' => '3',
				),
				1485 =>
				array(
					'Subject' => 'Industrial Engineering and Operations Research',
					'credits' => '3',
				),
				1486 =>
				array(
					'Subject' => 'Dynamics Lab',
					'credits' => '1',
				),
				1487 =>
				array(
					'Subject' => 'Turbo Machines',
					'credits' => '3',
				),
				1488 =>
				array(
					'Subject' => 'Ethics and Values',
					'credits' => '2',
				),
				1489 =>
				array(
					'Subject' => 'IC Engines Lab',
					'credits' => '1',
				),
				1490 =>
				array(
					'Subject' => 'Electives (la/free)*',
					'credits' => '8',
				),
				1491 =>
				array(
					'Subject' => 'Mathematics - I',
					'credits' => '5',
				),
				1492 =>
				array(
					'Subject' => 'Chemistry - I',
					'credits' => '3',
				),
				1493 =>
				array(
					'Subject' => 'Introduction to Electrical
Engineering',
					'credits' => '4',
				),
				1494 =>
				array(
					'Subject' => 'Engineering Drawing',
					'credits' => '1.5',
				),
				1495 =>
				array(
					'Subject' => 'Earth and Environmental Sciences',
					'credits' => '2',
				),
				1496 =>
				array(
					'Subject' => 'Thermodynamics',
					'credits' => '3',
				),
				1497 =>
				array(
					'Subject' => 'Media Project',
					'credits' => '1.5',
				),
				1498 =>
				array(
					'Subject' => 'English and Humanities - I',
					'credits' => '4',
				),
				1499 =>
				array(
					'Subject' => 'French Language & Culture - I',
					'credits' => '0',
				),
				1500 =>
				array(
					'Subject' => 'Mathematics - II',
					'credits' => '4',
				),
				1501 =>
				array(
					'Subject' => 'Physics - I',
					'credits' => '4',
				),
				1502 =>
				array(
					'Subject' => 'Chemistry - II',
					'credits' => '3',
				),
				1503 =>
				array(
					'Subject' => 'Electronics',
					'credits' => '4',
				),
				1504 =>
				array(
					'Subject' => 'Introduction to Computer Science',
					'credits' => '4',
				),
				1505 =>
				array(
					'Subject' => 'Workshop Practice',
					'credits' => '0',
				),
				1506 =>
				array(
					'Subject' => 'Introduction to Enterprises & Economy',
					'credits' => '3',
				),
				1507 =>
				array(
					'Subject' => 'Professional Ethics',
					'credits' => '1',
				),
				1508 =>
				array(
					'Subject' => 'French Language & Culture - II',
					'credits' => '0',
				),
				1509 =>
				array(
					'Subject' => 'Mathematics - III',
					'credits' => '4',
				),
				1510 =>
				array(
					'Subject' => 'Physics - II',
					'credits' => '5',
				),
				1511 =>
				array(
					'Subject' => 'Mechanics',
					'credits' => '3',
				),
				1512 =>
				array(
					'Subject' => 'Signals & Systems',
					'credits' => '4',
				),
				1513 =>
				array(
					'Subject' => 'Data Structures',
					'credits' => '5',
				),
				1514 =>
				array(
					'Subject' => 'Computer Aided Engineering Design',
					'credits' => '3',
				),
				1515 =>
				array(
					'Subject' => 'French Language & Culture - III',
					'credits' => '0',
				),
				1516 =>
				array(
					'Subject' => 'Numerical Methods',
					'credits' => '4',
				),
				1517 =>
				array(
					'Subject' => 'Transport Phenomena',
					'credits' => '4',
				),
				1518 =>
				array(
					'Subject' => 'Manufacturing Processes I',
					'credits' => '3',
				),
				1519 =>
				array(
					'Subject' => 'Mechanics of Solids',
					'credits' => '3',
				),
				1520 =>
				array(
					'Subject' => 'Theory of Mechanisms and Machines',
					'credits' => '4',
				),
				1521 =>
				array(
					'Subject' => 'Design Thinking',
					'credits' => '2',
				),
				1522 =>
				array(
					'Subject' => 'French Language & Culture - IV',
					'credits' => '0',
				),
				1523 =>
				array(
					'Subject' => 'Mathematics - IV',
					'credits' => '4',
				),
				1524 =>
				array(
					'Subject' => 'Introduction to Materials Sciences',
					'credits' => '3',
				),
				1525 =>
				array(
					'Subject' => 'Manufacturing Processes II',
					'credits' => '4',
				),
				1526 =>
				array(
					'Subject' => 'Applied Fluid Dynamics and Heat Transfer',
					'credits' => '4',
				),
				1527 =>
				array(
					'Subject' => 'Design of Machine Elements',
					'credits' => '4',
				),
				1528 =>
				array(
					'Subject' => 'Experimental Analysis',
					'credits' => '2',
				),
				1529 =>
				array(
					'Subject' => 'HSS + Mgmt. - Elective - I',
					'credits' => '2',
				),
				1530 =>
				array(
					'Subject' => 'French Language & Culture - V',
					'credits' => '0',
				),
				1531 =>
				array(
					'Subject' => 'Multiphysics',
					'credits' => '4',
				),
				1532 =>
				array(
					'Subject' => 'Thermal Engineering',
					'credits' => '4',
				),
				1533 =>
				array(
					'Subject' => 'Finite Element Methods',
					'credits' => '4',
				),
				1534 =>
				array(
					'Subject' => 'Structural Dynamics and Acoustics',
					'credits' => '4',
				),
				1535 =>
				array(
					'Subject' => 'Third Year Project',
					'credits' => '3',
				),
				1536 =>
				array(
					'Subject' => 'HSS + Mgmt. - Elective - II',
					'credits' => '2',
				),
				1537 =>
				array(
					'Subject' => 'Elective - I',
					'credits' => '3',
				),
				1538 =>
				array(
					'Subject' => 'French Language & Culture - VI',
					'credits' => '0',
				),
				1539 =>
				array(
					'Subject' => 'Control Theory',
					'credits' => '3',
				),
				1540 =>
				array(
					'Subject' => 'Industrial Engineering',
					'credits' => '3',
				),
				1541 =>
				array(
					'Subject' => 'HSS + Mgmt. - Elective - III',
					'credits' => '2',
				),
				1542 =>
				array(
					'Subject' => 'Elective - II',
					'credits' => '3',
				),
				1543 =>
				array(
					'Subject' => 'Elective - III',
					'credits' => '3',
				),
				1544 =>
				array(
					'Subject' => 'Year-4 Project',
					'credits' => '3',
				),
				1545 =>
				array(
					'Subject' => 'French Language & Culture - VII',
					'credits' => '0',
				),
				1546 =>
				array(
					'Subject' => 'Elective - IV',
					'credits' => '3',
				),
				1547 =>
				array(
					'Subject' => 'Elective - V',
					'credits' => '3',
				),
				1548 =>
				array(
					'Subject' => 'Year-4 Project',
					'credits' => '9',
				),
				1549 =>
				array(
					'Subject' => 'French Language & Culture - VIII',
					'credits' => '0',
				),
				1550 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Refrigeration & Air Conditioning',
					'credits' => '3',
				),
				1551 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Advanced Manufacturing',
					'credits' => '3',
				),
				1552 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Introduction to Operations Research',
					'credits' => '3',
				),
				1553 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Dynamics and Applications',
					'credits' => '3',
				),
				1554 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Theory of Mechanisms and Machines',
					'credits' => '3',
				),
				1555 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Turbomachinery',
					'credits' => '3',
				),
				1556 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Systems Engineering',
					'credits' => '3',
				),
				1557 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Advanced Mechanics of Materials',
					'credits' => '3',
				),
				1558 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Introduction to IC Engines',
					'credits' => '3',
				),
				1559 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Power Plant Engineering',
					'credits' => '3',
				),
				1560 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Alternative Energy Sources',
					'credits' => '3',
				),
				1561 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Composite Materials',
					'credits' => '3',
				),
				1562 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Engineering Alloys in Design',
					'credits' => '3',
				),
				1563 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Flight Dynamics',
					'credits' => '3',
				),
				1564 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Aircraft Design',
					'credits' => '3',
				),
				1565 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Introduction to Robotics',
					'credits' => '3',
				),
				1566 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Introduction to Combustion',
					'credits' => '3',
				),
				1567 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Computational Fluid Dynamics',
					'credits' => '3',
				),
				1568 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Robotics: Dynamics and Control',
					'credits' => '3',
				),
				1569 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Micro-scale Mechanics',
					'credits' => '3',
				),
				1570 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Theory of Elasticity',
					'credits' => '3',
				),
				1571 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Chemical & Bio Engineering',
					'credits' => '3',
				),
				1572 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Environmental Engineering',
					'credits' => '3',
				),
				1573 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Application of Soil Mechanics',
					'credits' => '3',
				),
				1574 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Machine Learning',
					'credits' => '3',
				),
				1575 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Advanced Data Analytics',
					'credits' => '3',
				),
				1576 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Social Computing',
					'credits' => '3',
				),
				1577 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Deep Learning',
					'credits' => '3',
				),
				1578 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Information Retrieval and Natural Language Processing',
					'credits' => '3',
				),
				1579 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'High Performance Computing',
					'credits' => '3',
				),
				1580 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Information Theory and Coding',
					'credits' => '3',
				),
				1581 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Digital Image Processing',
					'credits' => '3',
				),
				1582 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Computer Vision',
					'credits' => '3',
				),
				1583 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Biomedical Signal Processing',
					'credits' => '3',
				),
				1584 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Microwave Engineering',
					'credits' => '3',
				),
				1585 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Computational Electromagnetics',
					'credits' => '3',
				),
				1586 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Neuroscience and Anatomy',
					'credits' => '3',
				),
				1587 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Neural Networks and Sensors',
					'credits' => '3',
				),
				1588 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Signal Processing in Neural Systems',
					'credits' => '3',
				),
				1589 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Brain Modelling and ANNs',
					'credits' => '3',
				),
				1590 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'IoT System Architecture and Design',
					'credits' => '3',
				),
				1591 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Sensors and Instrumentation',
					'credits' => '3',
				),
				1592 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'High Performance Embedded Systems',
					'credits' => '3',
				),
				1593 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Numerical Linear Algebra',
					'credits' => '3',
				),
				1594 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Meshfree Methods',
					'credits' => '3',
				),
				1595 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Boundary Element Method and Boundary Integral Equations',
					'credits' => '3',
				),
				1596 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'PDE Based Image Processing',
					'credits' => '3',
				),
				1597 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Topology and Operator Theory',
					'credits' => '3',
				),
				1598 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Infinite Dimensional Control Theory',
					'credits' => '3',
				),
				1599 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Bayesian Statistics',
					'credits' => '3',
				),
				1600 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Financial Mathematics',
					'credits' => '3',
				),
				1601 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Nonlinear Conservation Laws and Applications',
					'credits' => '3',
				),
				1602 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Physics IV',
					'credits' => '3',
				),
				1603 =>
				array(
					'subject_category' => 'Electives',
					'Subject' => 'Lasers: Principles and Applications',
					'credits' => '3',
				),
				1604 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Selections from World Literature',
					'credits' => '2',
				),
				1605 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Business Communication',
					'credits' => '2',
				),
				1606 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Visual Story Telling',
					'credits' => '2',
				),
				1607 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Introduction to Culture Studies',
					'credits' => '2',
				),
				1608 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Literature and Visual Arts',
					'credits' => '2',
				),
				1609 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Cinema and Philosophy',
					'credits' => '2',
				),
				1610 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'The Humanities for a Critical Understanding of the World',
					'credits' => '2',
				),
				1611 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Academic Writing',
					'credits' => '2',
				),
				1612 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Urban Studies: Reading the City',
					'credits' => '2',
				),
				1613 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Contemporary Shakespeare: Readings and Adaptations',
					'credits' => '2',
				),
				1614 =>
				array(
					'subject_category' => 'HS Electives',
					'Subject' => 'Philosophical Arguments',
					'credits' => '2',
				),
				1615 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'DIY PROJECT',
					'credits' => '2',
				),
				1616 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'LINEAR ALGEBRA, NUMERICAL AND COMPLEX ANALYSIS',
					'credits' => '4',
				),
				1617 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'PROGAMMING AND DATA STRUCTURES LABORATORY',
					'credits' => '2',
				),
				1618 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'PHYSICS LABORATORY',
					'credits' => '2',
				),
				1619 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'BASIC ENGINEERING MECHANICS',
					'credits' => '4',
				),
				1620 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ENGINEERING DRAWING AND COMPUTER GRAPHICS',
					'credits' => '3',
				),
				1621 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'CHEMISTRY',
					'credits' => '4',
				),
				1622 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ADVANCED CALCULUS',
					'credits' => '4',
				),
				1623 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'CHEMISTRY LABORATORY',
					'credits' => '2',
				),
				1624 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ENVIRONMENTAL SCIENCE',
					'credits' => '2',
				),
				1625 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-II',
					'credits' => '1',
				),
				1626 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'SCIENCE OF LIVING SYSTEMS',
					'credits' => '2',
				),
				1627 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'PROGAMMING AND DATA STRUCTURES',
					'credits' => '3',
				),
				1628 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-I',
					'credits' => '1',
				),
				1629 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ENGINEERING LABORATORY',
					'credits' => '2',
				),
				1630 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ELECTRICAL TECHNOLOGY',
					'credits' => '4',
				),
				1631 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'PHYSICS OF WAVES',
					'credits' => '4',
				),
				1632 =>
				array(
					'subject_category' => 'FC',
					'Subject' => 'ENGLISH FOR COMMUNICATION',
					'credits' => '3',
				),
				1633 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'INTRODUCTION TO BASIC MANUFACTURING PROCESSES',
					'credits' => '2',
				),
				1634 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-III',
					'credits' => '1',
				),
				1635 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'DYNAMICS',
					'credits' => '4',
				),
				1636 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'MECHANICS OF SOLIDS LABORATORY',
					'credits' => '2',
				),
				1637 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'MECHANICS OF SOLIDS',
					'credits' => '4',
				),
				1638 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'FLUID MECHANICS',
					'credits' => '4',
				),
				1639 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'THEORY OF PARTIAL DIFFERENTIAL EQUATIONS',
					'credits' => '3',
				),
				1640 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'MECHATRONICS LABORATORY',
					'credits' => '2',
				),
				1641 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'TRANSFORM CALCULUS',
					'credits' => '3',
				),
				1642 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'EXTRA ACADEMIC ACTIVITY-IV',
					'credits' => '1',
				),
				1643 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'BASIC ELECTRONICS',
					'credits' => '4',
				),
				1644 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'OPERATIONS RESEARCH',
					'credits' => '3',
				),
				1645 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'BASIC THERMODYNAMICS',
					'credits' => '4',
				),
				1646 =>
				array(
					'subject_category' => 'DEPTH',
					'Subject' => 'BASIC ELECTRONICS LABORATORY',
					'credits' => '2',
				),
				1647 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics I (Electromagnetism)',
					'credits' => '5.5',
				),
				1648 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Physics II (Optics & waves)',
					'credits' => '4',
				),
				1649 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics I (Calculus & Linear Algebra)',
					'credits' => '4',
				),
				1650 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Chemistry',
					'credits' => '5.5',
				),
				1651 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics II ( ODE, Complex variables)',
					'credits' => '4',
				),
				1652 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Mathematics III (PDE, Prob/Stat)',
					'credits' => '4',
				),
				1653 =>
				array(
					'subject_category' => 'Basic Science Course',
					'Subject' => 'Biology',
					'credits' => '3',
				),
				1654 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'English',
					'credits' => '3',
				),
				1655 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Industrial Psychology',
					'credits' => '3',
				),
				1656 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Operations Research',
					'credits' => '3',
				),
				1657 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Economics',
					'credits' => '3',
				),
				1658 =>
				array(
					'subject_category' => 'Humanities and Social Sciences including Management courses',
					'Subject' => 'Finance & Accounting',
					'credits' => '3',
				),
				1659 =>
				array(
					'subject_category' => 'Engineering Science Course',
					'Subject' => 'Basic Electrical Engineering',
					'credits' => '5',
				),
				1660 =>
				array(
					'subject_category' => 'Engineering Science Course',
					'Subject' => 'Engineering Graphics& Design',
					'credits' => '3',
				),
				1661 =>
				array(
					'subject_category' => 'Engineering Science Course',
					'Subject' => 'Programming for Problem Solving',
					'credits' => '5',
				),
				1662 =>
				array(
					'subject_category' => 'Engineering Science Course',
					'Subject' => 'Workshop /Manufacturing Practice',
					'credits' => '3',
				),
				1663 =>
				array(
					'subject_category' => 'Engineering Science Course',
					'Subject' => 'Basic Electronic Engineering',
					'credits' => '4',
				),
				1664 =>
				array(
					'subject_category' => 'Engineering Science Course',
					'Subject' => 'Engineering Mechanics',
					'credits' => '4',
				),
				1665 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Thermodynamics',
					'credits' => '4',
				),
				1666 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Applied Thermodynamics',
					'credits' => '4',
				),
				1667 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Fluid Mechanics & Fluid Machines',
					'credits' => '4',
				),
				1668 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Strength of Materials',
					'credits' => '4',
				),
				1669 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Material Engineering',
					'credits' => '3',
				),
				1670 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Instrumentation & Control',
					'credits' => '4',
				),
				1671 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Heat Transfer',
					'credits' => '4',
				),
				1672 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Solid Mechanics',
					'credits' => '4',
				),
				1673 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Manufacturing Processes',
					'credits' => '3',
				),
				1674 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Kinematics & Theory of Machines',
					'credits' => '4',
				),
				1675 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Mechanical Engineering Laboratory
(Thermal)- I',
					'credits' => '1.5',
				),
				1676 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Manufacturing Technology',
					'credits' => '4',
				),
				1677 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Design of Machine Elements',
					'credits' => '4',
				),
				1678 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Mechanical Engineering Laboratory
(Design) II',
					'credits' => '1.5',
				),
				1679 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Automation in manufacturing',
					'credits' => '3',
				),
				1680 =>
				array(
					'subject_category' => 'Professional core course',
					'Subject' => 'Mechanical Engineering Laboratory III
(Manufacturi ng)',
					'credits' => '1.5',
				),
				1681 =>
				array(
					'subject_category' => 'Professional Elective course',
					'Subject' => 'Internal Combustion Engines
(Elective I)',
					'credits' => '3',
				),
				1682 =>
				array(
					'subject_category' => 'Professional Elective course',
					'Subject' => 'Mechatronic systems
(Elective II)',
					'credits' => '3',
				),
				1683 =>
				array(
					'subject_category' => 'Professional Elective course',
					'Subject' => 'Refrigeration &Air-conditioning
(Elective III)',
					'credits' => '3',
				),
				1684 =>
				array(
					'subject_category' => 'Professional Elective course',
					'Subject' => 'Finite Element Analysis
(Elective IV)',
					'credits' => '3',
				),
				1685 =>
				array(
					'subject_category' => 'Professional Elective course',
					'Subject' => 'Elective V',
					'credits' => '3',
				),
				1686 =>
				array(
					'subject_category' => 'Professional Elective course',
					'Subject' => 'Elective VI',
					'credits' => '3',
				),
				1687 =>
				array(
					'subject_category' => 'Project',
					'Subject' => 'Project-I',
					'credits' => '1',
				),
				1688 =>
				array(
					'subject_category' => 'Project',
					'Subject' => 'Project-II',
					'credits' => '3',
				),
				1689 =>
				array(
					'subject_category' => 'Project',
					'Subject' => 'Project-III',
					'credits' => '5',
				),
				1690 =>
				array(
					'subject_category' => 'Project',
					'Subject' => 'Project-IV',
					'credits' => '6',
				),
				1691 =>
				array(
					'subject_category' => 'Mandatory courses',
					'Subject' => 'Constitution of India',
					'credits' => '0',
				),
				1692 =>
				array(
					'subject_category' => 'Mandatory courses',
					'Subject' => 'Environmental Science',
					'credits' => '0',
				),
				1693 =>
				array(
					'subject_category' => 'Mandatory courses',
					'Subject' => 'Essence of Indian Traditional
Knowledge',
					'credits' => '0',
				),
			);
		
		
		/*foreach($arr as $ar){
		
			if($ar["subject_category"] != ""){
			
				$scChk = $this->db->get_where("tbl_subject_category",["category_name"=>$ar["subject_category"]])->num_rows();

				if($scChk == 0){
					$this->db->insert("tbl_subject_category",["category_name"=>$ar["subject_category"]]);
				}
				
			}
			
		}*/
		
		/*foreach($arr as $ar1){
			
			if($ar1["Subject"] != ""){
				
				$scChk = $this->db->get_where("tbl_subjects",["subject_name"=>$ar1["Subject"]])->num_rows();

				if($scChk == 0){
					$this->db->insert("tbl_subjects",["subject_name"=>$ar1["Subject"],"ideal_credits"=>$ar1["credits"]]);
				}
				
			}
				
		}*/
		
		foreach($arr as $ar2){
			
			if($ar2["subject_category"] == "" || $ar2["Subject"] == ""){
				
			}else{
				
				$subcatId = $this->db->get_where("tbl_subject_category",["category_name"=>$ar2["subject_category"]])->row()->id;
				$subId = $this->db->get_where("tbl_subjects",["subject_name"=>$ar2["Subject"]])->row()->id;
				
				$this->db->insert("tbl_sub_subcat_links",["subject_category"=>$subcatId,"subject"=>$subId]);
				
			}
				
		}

	}
	
	public function insertDegree(){
		
		$arr = 
  array (
    0 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'ACADEMIC WRITING',
      'credits' => '6',
    ),
    1 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'ACADEMIC WRITING',
      'credits' => '6',
    ),
    2 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Academic Writing',
      'credits' => '2',
    ),
    3 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Accounting Standards',
      'credits' => '5',
    ),
    4 => 
    array (
      'subject_category' => 'Skill Enhancement II',
      'Subject' => 'Advance Accounting',
    ),
    5 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Advanced Accounting',
      'credits' => '5',
    ),
    6 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Advanced Accounting',
      'credits' => '5',
    ),
    7 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Advanced Accounting',
      'credits' => '5',
    ),
    8 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Advanced Algebra / Advanced Probability Theory and Statistics',
      'credits' => '6',
    ),
    9 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Advanced Algebra and Calculus',
      'credits' => '6',
    ),
    10 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Advanced Algebra and Calculus',
      'credits' => '6',
    ),
    11 => 
    array (
      'subject_category' => 'Honors Elective IV',
      'Subject' => 'ADVANCED BUSINESS ANALYTICS',
    ),
    12 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Advanced Corporate Accounting',
      'credits' => '5',
    ),
    13 => 
    array (
      'subject_category' => 'Language & Communication Skills',
      'Subject' => 'ADVANCED ENGLISH COMMUNICATION SKILLS',
    ),
    14 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Advanced Managerial Accounting',
      'credits' => '5',
    ),
    15 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Advanced Mathematical Physics I',
      'credits' => '6',
    ),
    16 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Advanced Mathematical Physics II',
      'credits' => '6',
    ),
    17 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Advanced Organic Chemistry',
      'credits' => '6',
    ),
    18 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Advanced Programming in Java',
      'credits' => '4',
    ),
    19 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Advertising , Sales Promotion & Brand Management',
      'credits' => '6',
    ),
    20 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Algebra',
    ),
    21 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Algebra',
      'credits' => '6',
    ),
    22 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Algebra',
      'credits' => '6',
    ),
    23 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Algebra',
      'credits' => '6',
    ),
    24 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Alternate English',
    ),
    25 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'American Literature',
      'credits' => '6',
    ),
    26 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'American Literature',
      'credits' => '6',
    ),
    27 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'AMERICAN LITERATURE: POETRY AND FICTION',
      'credits' => '6',
    ),
    28 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'An Introduction to Archaeology ',
    ),
    29 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'An Introduction to British and American Poetry',
      'credits' => '6',
    ),
    30 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'An Introduction to British and American Poetry',
      'credits' => '6',
    ),
    31 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Analog System and Applications',
      'credits' => '6',
    ),
    32 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Analog Systems & Applications',
      'credits' => '6',
    ),
    33 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Analysis',
    ),
    34 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Analysis of Algorithms',
      'credits' => '6',
    ),
    35 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Analytic Philosophy',
      'credits' => '6',
    ),
    36 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Analytical Geometry and Applied Algebra',
    ),
    37 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Analytical Methods in Chemistry I',
      'credits' => '2',
    ),
    38 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Analytical Methods in Chemistry II',
      'credits' => '2',
    ),
    39 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Analytical Techniques in Plant Sciences',
      'credits' => '6',
    ),
    40 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Anatomy of Angiosperms',
      'credits' => '6',
    ),
    41 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Android Programming',
      'credits' => '4',
    ),
    42 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Animal Biotechnology',
      'credits' => '6',
    ),
    43 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Animal Biotechnology',
      'credits' => '6',
    ),
    44 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Application of Organic & Inorganic Chemistry',
    ),
    45 => 
    array (
      'subject_category' => 'Honors Elective II',
      'Subject' => 'APPLICATIONS OF BUSINESS ANALYTICS',
    ),
    46 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Applied Econometrics/  International Economics/
Public Economics',
      'credits' => '6',
    ),
    47 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Applied Econometrics/  International
Economics/Public Economics',
      'credits' => '6',
    ),
    48 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Applied Ethics',
    ),
    49 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Applied Ethics',
      'credits' => '6',
    ),
    50 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Applied Optics',
      'credits' => '4',
    ),
    51 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Archegoniatae',
      'credits' => '6',
    ),
    52 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Art and Film Appreciation',
      'credits' => '4',
    ),
    53 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Art of balanced living',
      'credits' => '6',
    ),
    54 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Artificial Intelligence',
    ),
    55 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Astrophysics & Cosmology',
      'credits' => '6',
    ),
    56 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Atomic    Structure,    Bonding,    General
Organic Chem, Aliphatic Hydrocarbons',
      'credits' => '6',
    ),
    57 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Atomic Structure, Bonding, General Organic Chemistry and Aliphatic Hydrocarbons',
      'credits' => '6',
    ),
    58 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Audiography I and Editing I',
      'credits' => '6',
    ),
    59 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Audiography II and Videography I',
      'credits' => '6',
    ),
    60 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Auditing',
      'credits' => '4',
    ),
    61 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Auditing and Assurance',
      'credits' => '6',
    ),
    62 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Autobiography/ Biography/  Travellogue',
      'credits' => '6',
    ),
    63 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Bacteriology',
      'credits' => '6',
    ),
    64 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Bangla Drama (Period-I)',
      'credits' => '6',
    ),
    65 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Bangla Drama (Period-II)',
      'credits' => '6',
    ),
    66 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Bangla Drama: Rhetoric and Prosody',
      'credits' => '6',
    ),
    67 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Bangla Essay & Criticism',
      'credits' => '6',
    ),
    68 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Bangla Fiction & its Reception',
      'credits' => '2',
    ),
    69 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Bangla Fiction (Period-I)',
      'credits' => '6',
    ),
    70 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Bangla Fiction (Period-II)',
      'credits' => '6',
    ),
    71 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Bangla Language through Literature',
      'credits' => '2',
    ),
    72 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Bangla Poetry',
      'credits' => '6',
    ),
    73 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Bangla Poetry',
      'credits' => '6',
    ),
    74 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Bangla Poetry (Period-I)',
      'credits' => '6',
    ),
    75 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Bangla Poetry (Period-II)',
      'credits' => '6',
    ),
    76 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Bangla Prose & Oral Narrative',
      'credits' => '6',
    ),
    77 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Bangla Prosody, Rhetoric, Imagery, Forms of Poetry',
      'credits' => '6',
    ),
    78 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Bangla Short Story & Novel',
      'credits' => '6',
    ),
    79 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Banking Theory & Practice',
      'credits' => '4',
    ),
    80 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Banking Theory & Practice',
      'credits' => '4',
    ),
    81 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Banking Theory & Practice',
      'credits' => '4',
    ),
    82 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Basic Analytical Chemistry',
      'credits' => '4',
    ),
    83 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Basic Elements of Ayurveda',
    ),
    84 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Basic Instrumentation Skills',
      'credits' => '4',
    ),
    85 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Basics of Marketing',
      'credits' => '5',
    ),
    86 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Bengali',
    ),
    87 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Bengali Non-Fictional Writing  and Essays',
      'credits' => '6',
    ),
    88 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Bengali Novel: Selected Texts',
      'credits' => '6',
    ),
    89 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Bengali Play',
      'credits' => '6',
    ),
    90 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Bengali Poetry',
      'credits' => '6',
    ),
    91 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Bengali Short Stories',
      'credits' => '6',
    ),
    92 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Bengali Sports Literature Moti Nandi',
      'credits' => '6',
    ),
    93 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Biochemistry',
      'credits' => '6',
    ),
    94 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Biochemistry',
      'credits' => '6',
    ),
    95 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Biochemistry of Metabolic Processes',
      'credits' => '6',
    ),
    96 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Biodiversity (Animals)',
      'credits' => '6',
    ),
    97 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Biodiversity (Microbes, Algae, Fungi and Archegoniatae)',
      'credits' => '6',
    ),
    98 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Biodiversity
(Microbes, Fungi and Archegoniatae)',
      'credits' => '6',
    ),
    99 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Biofertilizer and Biopesticide',
      'credits' => '2',
    ),
    100 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Biofertilizers',
      'credits' => '4',
    ),
    101 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Bioinformatics',
      'credits' => '6',
    ),
    102 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Bioinformatics and Biostatistics',
      'credits' => '6',
    ),
    103 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Biomolecules and Cell Biology',
      'credits' => '6',
    ),
    104 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Biosafety and intellectual property rights',
      'credits' => '2',
    ),
    105 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Biostatistics',
      'credits' => '6',
    ),
    106 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Book Editing & Bangla Language Softwares',
      'credits' => '6',
    ),
    107 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Brand Management',
      'credits' => '5',
    ),
    108 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'British Drama: 14th to 17th Century',
      'credits' => '6',
    ),
    109 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'British Literature Novel Play',
    ),
    110 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'British Literature: 18th Century',
      'credits' => '6',
    ),
    111 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'British Literature: 18th Century',
      'credits' => '6',
    ),
    112 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'British Literature: 19th Century',
      'credits' => '6',
    ),
    113 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'British Literature: 19th Century',
      'credits' => '6',
    ),
    114 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'BRITISH Literature: Fiction and Poetry',
      'credits' => '6',
    ),
    115 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'British Literature: The Early 20th Century',
      'credits' => '6',
    ),
    116 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'British Literature: The Early 20th Century',
      'credits' => '6',
    ),
    117 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'British Poetry 14th to 17th Century',
      'credits' => '6',
    ),
    118 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'British Poetry and Drama: 14th to 17th Centuries',
      'credits' => '6',
    ),
    119 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'British Poetry and Drama: 17th and 18th Centuries',
      'credits' => '6',
    ),
    120 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'British Poetry and Drama: 17th&18th Cy',
      'credits' => '6',
    ),
    121 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'British Romantic Literature',
      'credits' => '6',
    ),
    122 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'British Romantic Literature',
      'credits' => '6',
    ),
    123 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Business Accounting',
      'credits' => '6',
    ),
    124 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Business Communication',
    ),
    125 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Business Communication-I',
      'credits' => '1',
    ),
    126 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Business Communication-II',
      'credits' => '1',
    ),
    127 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Economics',
      'credits' => '5',
    ),
    128 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Economics',
      'credits' => '5',
    ),
    129 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Economics',
      'credits' => '5',
    ),
    130 => 
    array (
      'subject_category' => 'Discipline Core',
      'Subject' => 'BUSINESS ECONOMICS',
    ),
    131 => 
    array (
      'subject_category' => 'Discipline Core',
      'Subject' => 'BUSINESS ETHICS',
    ),
    132 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Ethics & Corporate Governance',
      'credits' => '5',
    ),
    133 => 
    array (
      'subject_category' => 'Honors Elective I',
      'Subject' => 'BUSINESS INTELLIGENCE AND DATA VISUALIZATION',
    ),
    134 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Business Law',
      'credits' => '6',
    ),
    135 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Law',
      'credits' => '5',
    ),
    136 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Law',
      'credits' => '4',
    ),
    137 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Law',
      'credits' => '4',
    ),
    138 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Law',
      'credits' => '4',
    ),
    139 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Business Mathematics and Statistics',
      'credits' => '6',
    ),
    140 => 
    array (
      'subject_category' => 'Discipline Core',
      'Subject' => 'BUSINESS MATHEMATICS AND STATISTICS',
    ),
    141 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Business Mathematics and Statistics - 1',
      'credits' => '6',
    ),
    142 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Business Mathematics and Statistics - 2',
      'credits' => '6',
    ),
    143 => 
    array (
      'subject_category' => 'Discipline Core',
      'Subject' => 'BUSINESS ORGANISATION AND MANAGEMENT',
    ),
    144 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Organization',
      'credits' => '4',
    ),
    145 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Organization',
      'credits' => '4',
    ),
    146 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Organization',
      'credits' => '4',
    ),
    147 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Business Policy & Strategy',
      'credits' => '6',
    ),
    148 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Business Research',
      'credits' => '6',
    ),
    149 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Statistics',
      'credits' => '5',
    ),
    150 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Statistics-I',
      'credits' => '4',
    ),
    151 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Statistics-I',
      'credits' => '4',
    ),
    152 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Statistics-I',
      'credits' => '4',
    ),
    153 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Statistics-II',
      'credits' => '4',
    ),
    154 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Statistics-II',
      'credits' => '4',
    ),
    155 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Business Statistics-II',
      'credits' => '4',
    ),
    156 => 
    array (
      'subject_category' => 'Honors Elective III',
      'Subject' => 'BUSINESS TRANFORMATION USING AI & ANALYTICS',
    ),
    157 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Calculus',
    ),
    158 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Calculus',
      'credits' => '6',
    ),
    159 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Calculus and Geometry',
      'credits' => '6',
    ),
    160 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Calculus and Matrices',
      'credits' => '6',
    ),
    161 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Cartographic Techniques (Practical)',
      'credits' => '6',
    ),
    162 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Categorical Data Analysis',
      'credits' => '6',
    ),
    163 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Cell and Molecular Biology',
      'credits' => '6',
    ),
    164 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Cell Biology',
      'credits' => '6',
    ),
    165 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Cell biology',
      'credits' => '6',
    ),
    166 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Chemical    Energetics,    Equilibria    and Functional Group Organic Chemistry',
      'credits' => '6',
    ),
    167 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Chemical biology, instrumentation and biotechniques',
      'credits' => '6',
    ),
    168 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Chemistry  of  s-  and  p-Block  Elements, States of Matter and Chemical Kinetics',
      'credits' => '6',
    ),
    169 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Chemistry I – Atomic Structure, Bonding; General Organic Chemistry',
      'credits' => '6',
    ),
    170 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Chemistry II – Molecules of Life',
      'credits' => '6',
    ),
    171 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Chemistry of d-Block Elements, Quantum Chemistry, Spectroscopy',
      'credits' => '6',
    ),
    172 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Children’s Literature',
    ),
    173 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Children’s Literature: Selected Texts',
      'credits' => '6',
    ),
    174 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Chronobiology and Animal Behaviour',
      'credits' => '6',
    ),
    175 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Circuit Design & Simulation',
      'credits' => '4',
    ),
    176 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Classical Dynamics',
      'credits' => '6',
    ),
    177 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Classical Political Philosophy',
      'credits' => '6',
    ),
    178 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Classical Political Philosophy',
      'credits' => '6',
    ),
    179 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Classical Sanskrit Literature (Drama)',
      'credits' => '6',
    ),
    180 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Classical Sanskrit Literature (Poetry)',
      'credits' => '6',
    ),
    181 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Classical Sanskrit Literature (Prose)',
      'credits' => '6',
    ),
    182 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Climatology',
      'credits' => '6',
    ),
    183 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Colonialism and Nationalism in India',
      'credits' => '6',
    ),
    184 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Commerce Lab',
      'credits' => '4',
    ),
    185 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Commerce Lab',
      'credits' => '4',
    ),
    186 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Commerce Lab',
      'credits' => '4',
    ),
    187 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Communication System',
      'credits' => '6',
    ),
    188 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Company Law',
      'credits' => '4',
    ),
    189 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Company Law',
      'credits' => '4',
    ),
    190 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Company Law',
      'credits' => '4',
    ),
    191 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Comparative Anatomy and
Developmental Biology',
      'credits' => '6',
    ),
    192 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Comparative Anatomy of Vertebrates',
      'credits' => '6',
    ),
    193 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Comparative Bangla Literature-I',
      'credits' => '2',
    ),
    194 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Comparative Bangla Literature-II',
      'credits' => '6',
    ),
    195 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Comparative Bangla Literature-III',
      'credits' => '6',
    ),
    196 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Comparative Bangla Literature-IV',
      'credits' => '6',
    ),
    197 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Comparative Economic Development/
Political Economy  /Money and Financial Markets',
      'credits' => '6',
    ),
    198 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Comparative Economic Development/
Political Economy/Money  and Financial Markets',
      'credits' => '6',
    ),
    199 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Comparative Government and Politics',
    ),
    200 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Comparative Government and Politics',
      'credits' => '6',
    ),
    201 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Complex Analysis',
      'credits' => '6',
    ),
    202 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Computer Algebra Systems and Related Softwares',
      'credits' => '4',
    ),
    203 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Computer Application in Business',
      'credits' => '6',
    ),
    204 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Computer Fundamentals and Programming in C',
    ),
    205 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Computer Fundamentals and Programming in C',
    ),
    206 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Computer Graphics',
    ),
    207 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Computer Networks',
    ),
    208 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Computer Networks and Internet Technologies',
    ),
    209 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Computer Networks and Internet Technologies',
    ),
    210 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Computer Programming with C Language',
      'credits' => '2',
    ),
    211 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Computer System Architecture',
      'credits' => '6',
    ),
    212 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Computer System Architecture',
    ),
    213 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Computerised Accounting',
      'credits' => '4',
    ),
    214 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Computerised Accounting',
      'credits' => '4',
    ),
    215 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Computerised Accounting',
      'credits' => '4',
    ),
    216 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Conductance,      Electrochemistry      and Functional Group Organic Chemistry II',
      'credits' => '6',
    ),
    217 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Constitutional Government and Democracy in India',
      'credits' => '6',
    ),
    218 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Constitutional Government and Democracy in India',
      'credits' => '6',
    ),
    219 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Consumer Behaviour',
      'credits' => '6',
    ),
    220 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Contemporary Economic Issues/Data Analysis',
      'credits' => '4',
    ),
    221 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Contemporary India',
    ),
    222 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Continental Philosophy',
      'credits' => '6',
    ),
    223 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Copy writing of Management',
      'credits' => '5',
    ),
    224 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'CORE MIL 1',
      'credits' => '6',
    ),
    225 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'CORE MIL 2',
      'credits' => '6',
    ),
    226 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Corporate Accounting',
      'credits' => '5',
    ),
    227 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Corporate Accounting',
      'credits' => '5',
    ),
    228 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Corporate Accounting',
      'credits' => '5',
    ),
    229 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Corporate Law',
      'credits' => '6',
    ),
    230 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Cost & Management Accounting',
      'credits' => '5',
    ),
    231 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Cost Accounting',
      'credits' => '4',
    ),
    232 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Cost Accounting',
      'credits' => '5',
    ),
    233 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Cost Accounting',
      'credits' => '4',
    ),
    234 => 
    array (
      'subject_category' => 'Discipline Core',
      'Subject' => 'COST AND MANAGEMENT ACCOUNTING',
    ),
    235 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Cost and Management Accounting - 1',
      'credits' => '6',
    ),
    236 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Cost and Management Accounting - 2',
      'credits' => '6',
    ),
    237 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Creative Writing',
      'credits' => '4',
    ),
    238 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Creative Writing',
      'credits' => '2',
    ),
    239 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Creative Writing',
      'credits' => '2',
    ),
    240 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Critical Survey of  Sanskrit Literature',
      'credits' => '6',
    ),
    241 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Critical Thinking',
      'credits' => '4',
    ),
    242 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Critical Thinking and Writing',
      'credits' => '6',
    ),
    243 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Data Analysis',
      'credits' => '2',
    ),
    244 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Data Analysis using Python Programming',
      'credits' => '4',
    ),
    245 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Data Security',
    ),
    246 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Data Structures',
      'credits' => '6',
    ),
    247 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Data Structures',
    ),
    248 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Database Management Systems',
      'credits' => '6',
    ),
    249 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Database Management Systems',
    ),
    250 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Degree Film',
      'credits' => '6',
    ),
    251 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Delhi Through the Ages',
    ),
    252 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Democratic Awareness through Legal Literacy',
    ),
    253 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Descriptive Statistics',
      'credits' => '6',
    ),
    254 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Design and Analysis of Algorithms',
    ),
    255 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Design of Experiments',
      'credits' => '6',
    ),
    256 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Development  of  Language and Script',
      'credits' => '6',
    ),
    257 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Development Economics',
      'credits' => '6',
    ),
    258 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Development Economics and Statistics',
      'credits' => '6',
    ),
    259 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Development Economics I',
      'credits' => '6',
    ),
    260 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Development Economics II',
      'credits' => '6',
    ),
    261 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Development Process and Social movements in Contemporary India',
      'credits' => '6',
    ),
    262 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Development Process and Social Movements in Contemporary India',
      'credits' => '6',
    ),
    263 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Developmental Biology',
      'credits' => '6',
    ),
    264 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Differential Equations',
      'credits' => '6',
    ),
    265 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Differential Equations III and Metric Spaces II',
      'credits' => '6',
    ),
    266 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Differential Equations/ 
Mechanics and Discrete Mathematics',
      'credits' => '6',
    ),
    267 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Differential Equations-I and Group Theory-I',
      'credits' => '6',
    ),
    268 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Differential Equations-II and Mechanics',
      'credits' => '6',
    ),
    269 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Digital Systems and Applications',
      'credits' => '6',
    ),
    270 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Digital Systems and Applications',
      'credits' => '6',
    ),
    271 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Direct and Indirect Taxation - 1',
      'credits' => '6',
    ),
    272 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Direct and Indirect Taxation - 2',
      'credits' => '6',
    ),
    273 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Disaster Management',
    ),
    274 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Disaster Management based Project Work (Practical)',
      'credits' => '6',
    ),
    275 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Disaster Risk Reduction',
    ),
    276 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Discrete Mathematics',
    ),
    277 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Discrete Mathematics / Mathematical Finance',
      'credits' => '6',
    ),
    278 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Discrete Structures',
    ),
    279 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Dissertation',
      'credits' => '6',
    ),
    280 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Dissertation',
      'credits' => '6',
    ),
    281 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Dissertation',
      'credits' => '6',
    ),
    282 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Dissertation',
      'credits' => '6',
    ),
    283 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Dissertation',
      'credits' => '6',
    ),
    284 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Dissertation',
    ),
    285 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Dissertation',
    ),
    286 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Dissertation',
    ),
    287 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Dissertation',
      'credits' => '6',
    ),
    288 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Dissertation',
    ),
    289 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Dissertation',
    ),
    290 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Dissertation',
    ),
    291 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Dissertation',
    ),
    292 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Dissertation',
      'credits' => '6',
    ),
    293 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Diversity of Chordates',
      'credits' => '6',
    ),
    294 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Documentary',
      'credits' => '6',
    ),
    295 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'DSE-1 (Anyone from Group - A or B)',
      'credits' => '6',
    ),
    296 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'DSE-2 (Anyone from Group - A or B)',
      'credits' => '6',
    ),
    297 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'DSE-3 (Anyone from Group -A or B)',
      'credits' => '6',
    ),
    298 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Ecology',
      'credits' => '6',
    ),
    299 => 
    array (
      'subject_category' => 'Skill Enhancement Elective Course',
      'Subject' => 'E-Commerce',
      'credits' => '4',
    ),
    300 => 
    array (
      'subject_category' => 'Discipline Core',
      'Subject' => 'E-COMMERCE',
    ),
    301 => 
    array (
      'subject_category' => 'Skill Enhancement Elective Course',
      'Subject' => 'E-Commerce & Information Technology Tools',
      'credits' => '1',
    ),
    302 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Econometrics',
      'credits' => '6',
    ),
    303 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Economic Biology, Biotechnology',
      'credits' => '6',
    ),
    304 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Economic Botany',
      'credits' => '6',
    ),
    305 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Economic Development and Policy in India I',
    ),
    306 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Economic Development and Policy in India II',
    ),
    307 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Economic Geography',
      'credits' => '6',
    ),
    308 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Economic Sociology',
      'credits' => '6',
    ),
    309 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Economic Sociology',
      'credits' => '6',
    ),
    310 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Economic Statistics and Demography',
      'credits' => '6',
    ),
    311 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Elective – I',
      'credits' => '5',
    ),
    312 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Elective – II',
      'credits' => '5',
    ),
    313 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Elective -I
Financial Institutions & Markets(F) Marketing of Services (M)
.Change Management(HR)',
      'credits' => '5',
    ),
    314 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Elective -II
Investment Management(F) CRM & Retail Management(M)
Industrial Relations(HR)',
      'credits' => '5',
    ),
    315 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Elective- III
Banking & Insurance (F) Consumer Behaviour(M)
Performance Management (HR)',
      'credits' => '5',
    ),
    316 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Elective- IV
Business Taxation (F)
Advertising & Sales Promotion(M) Talent Management(HR)',
      'credits' => '5',
    ),
    317 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Electricity and Magnetism',
      'credits' => '6',
    ),
    318 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Electricity and Magnetism',
      'credits' => '6',
    ),
    319 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Electricity and Magnetism',
      'credits' => '6',
    ),
    320 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Electromagnetic Theory',
      'credits' => '6',
    ),
    321 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Electromagnetic Theory',
      'credits' => '6',
    ),
    322 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Elements of Modern Physics',
      'credits' => '6',
    ),
    323 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Elements of Modern Physics',
      'credits' => '6',
    ),
    324 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Elements of Modern Physics',
      'credits' => '6',
    ),
    325 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English',
      'credits' => '5',
    ),
    326 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English',
      'credits' => '5',
    ),
    327 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English',
      'credits' => '5',
    ),
    328 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English',
      'credits' => '5',
    ),
    329 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English',
      'credits' => '5',
    ),
    330 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English',
      'credits' => '5',
    ),
    331 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English',
      'credits' => '5',
    ),
    332 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English',
      'credits' => '5',
    ),
    333 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English',
      'credits' => '5',
    ),
    334 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English',
      'credits' => '5',
    ),
    335 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English',
      'credits' => '5',
    ),
    336 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English',
      'credits' => '5',
    ),
    337 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English',
      'credits' => '5',
    ),
    338 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'English / Hindi / Sanskrit / MIL / Philosophy in Lieu',
      'credits' => '4',
    ),
    339 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'English / Hindi / Sanskrit / MIL / Philosophy in Lieu',
      'credits' => '4',
    ),
    340 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'English / Hindi / Sanskrit / MIL / Philosophy in Lieu',
      'credits' => '4',
    ),
    341 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'English / Hindi / Sanskrit / MIL / Philosophy in Lieu',
      'credits' => '4',
    ),
    342 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'English / Hindi / Sanskrit / MIL / Philosophy in Lieu',
      'credits' => '4',
    ),
    343 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'English / Hindi / Sanskrit / MIL / Philosophy in Lieu',
      'credits' => '4',
    ),
    344 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'English / Hindi / Sanskrit / MIL / Philosophy in Lieu',
      'credits' => '4',
    ),
    345 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'English / Hindi / Sanskrit / MIL / Philosophy in Lieu',
      'credits' => '4',
    ),
    346 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'English / Hindi / Sanskrit / MIL / Philosophy in Lieu',
      'credits' => '4',
    ),
    347 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'English / Hindi / Sanskrit / MIL / Philosophy in Lieu',
      'credits' => '4',
    ),
    348 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English / Hindi / Sanskrit / MIL I',
      'credits' => '6',
    ),
    349 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English / Hindi / Sanskrit / MIL I',
      'credits' => '6',
    ),
    350 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English / Hindi / Sanskrit / MIL II',
      'credits' => '6',
    ),
    351 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English / Hindi / Sanskrit / MIL II',
      'credits' => '6',
    ),
    352 => 
    array (
      'subject_category' => 'Language & Communication Skills',
      'Subject' => 'ENGLISH COMMUNICATION SKILLS',
    ),
    353 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'English Literature I',
      'credits' => '6',
    ),
    354 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'English Literature II',
      'credits' => '6',
    ),
    355 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'English Literature III',
      'credits' => '6',
    ),
    356 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'English Literature IV',
      'credits' => '6',
    ),
    357 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'English/ Hindi/ Sanskrit/ MIL/ Philosophy in Lieu',
      'credits' => '4',
    ),
    358 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'English/Hindi/Sanskrit MIL/ Philosophy in Lieu',
      'credits' => '4',
    ),
    359 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'English/Hindi/Sanskrit MIL/ Philosophy in Lieu',
      'credits' => '4',
    ),
    360 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'English/Hindi/Sanskrit/  MIL/Philosophy in Lieu',
      'credits' => '4',
    ),
    361 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'English/Hindi/Sanskrit/ MIL/Philosophy  in Lieu',
      'credits' => '4',
    ),
    362 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'English/Hindi/Sanskrit/ MIL/Philosophy in Lieu',
      'credits' => '4',
    ),
    363 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English-II',
      'credits' => '5',
    ),
    364 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English-II',
      'credits' => '5',
    ),
    365 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'English-II',
      'credits' => '5',
    ),
    366 => 
    array (
      'subject_category' => 'Skill Enhancement IV',
      'Subject' => 'ENTERPRISE INFORMATION SYSTEMS',
    ),
    367 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Entrepreneurial Development & Business Ethics',
      'credits' => '4',
    ),
    368 => 
    array (
      'subject_category' => 'Skill Enhancement Elective Course',
      'Subject' => 'Entrepreneurship',
      'credits' => '4',
    ),
    369 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Entrepreneurship Development',
      'credits' => '6',
    ),
    370 => 
    array (
      'subject_category' => 'Discipline Core',
      'Subject' => 'ENTREPRENEURSHIP DEVELOPMENT',
    ),
    371 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Environmental Awareness in Sanskrit Literature',
      'credits' => '6',
    ),
    372 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Environmental Geography',
    ),
    373 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Environmental Geography',
      'credits' => '6',
    ),
    374 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Environmental Microbiology',
      'credits' => '6',
    ),
    375 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Environmental Sociology',
      'credits' => '6',
    ),
    376 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Environmental Sociology',
      'credits' => '6',
    ),
    377 => 
    array (
      'subject_category' => 'Environmental Studies',
      'Subject' => 'ENVIRONMENTAL STUDIES',
    ),
    378 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies - 1',
      'credits' => '1',
    ),
    379 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies - 2',
      'credits' => '1',
    ),
    380 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies – I',
      'credits' => '1',
    ),
    381 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies – II',
      'credits' => '1',
    ),
    382 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies (EVS)',
      'credits' => '4',
    ),
    383 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies (EVS)',
      'credits' => '4',
    ),
    384 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies (EVS)',
      'credits' => '4',
    ),
    385 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies (EVS)',
      'credits' => '4',
    ),
    386 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies (EVS)',
      'credits' => '4',
    ),
    387 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies (EVS)',
      'credits' => '4',
    ),
    388 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies (EVS)',
      'credits' => '4',
    ),
    389 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies (EVS)',
      'credits' => '4',
    ),
    390 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies (EVS)',
      'credits' => '4',
    ),
    391 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies (EVS)',
      'credits' => '4',
    ),
    392 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies (EVS)',
      'credits' => '4',
    ),
    393 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies (EVS)',
      'credits' => '4',
    ),
    394 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies (EVS)',
      'credits' => '4',
    ),
    395 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies (EVS)',
      'credits' => '4',
    ),
    396 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies (EVS)',
      'credits' => '4',
    ),
    397 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Environmental Studies (EVS)',
      'credits' => '4',
    ),
    398 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Environmental Studies (EVS)',
      'credits' => '4',
    ),
    399 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Ethical and Moral Issues in Sanskrit Literature',
    ),
    400 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Ethical Decision Making',
    ),
    401 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Ethics',
    ),
    402 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Ethics',
      'credits' => '6',
    ),
    403 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Ethics and CSR',
      'credits' => '6',
    ),
    404 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'European Classical Literature',
      'credits' => '6',
    ),
    405 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'European Classical Literature',
      'credits' => '6',
    ),
    406 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Evolution of Geographical Thought',
      'credits' => '6',
    ),
    407 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Evolutionary Biology',
      'credits' => '6',
    ),
    408 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Feluda Series: Satyajit Roy’s ’Royal Bengal Rahasya’  and ‘Badshahi Angti’',
      'credits' => '6',
    ),
    409 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Feminism',
      'credits' => '6',
    ),
    410 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Field Techniques and Survey Based Project Report (Practical)',
    ),
    411 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Field Work and Research Methodology (Practical)',
      'credits' => '6',
    ),
    412 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Film Appreciation/ Understanding the Legal System/ Indian History &Culture',
      'credits' => '2',
    ),
    413 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Film Criticism',
      'credits' => '2',
    ),
    414 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Film Language and History: An Introduction',
      'credits' => '6',
    ),
    415 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Film Styles : A Historical Survey',
      'credits' => '6',
    ),
    416 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Financial Accounting',
      'credits' => '5',
    ),
    417 => 
    array (
      'subject_category' => 'Discipline Core',
      'Subject' => 'FINANCIAL ACCOUNTING',
    ),
    418 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Financial Accounting - 1',
      'credits' => '6',
    ),
    419 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Financial Accounting - 2',
      'credits' => '6',
    ),
    420 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Financial Accounting - I',
      'credits' => '5',
    ),
    421 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Financial Accounting - I',
      'credits' => '5',
    ),
    422 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Financial Accounting - I',
      'credits' => '5',
    ),
    423 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Financial Accounting - II',
      'credits' => '5',
    ),
    424 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Financial Accounting - II',
      'credits' => '5',
    ),
    425 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Financial Accounting - II',
      'credits' => '5',
    ),
    426 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Financial Economics/Research Methodology',
      'credits' => '4',
    ),
    427 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Financial Institutions & Markets',
      'credits' => '4',
    ),
    428 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Financial Institutions & Markets',
      'credits' => '4',
    ),
    429 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Financial Institutions & Markets',
      'credits' => '4',
    ),
    430 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Financial Institutions and Markets',
      'credits' => '6',
    ),
    431 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Financial Management',
      'credits' => '6',
    ),
    432 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Financial Management',
      'credits' => '5',
    ),
    433 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Financial Statement Analysis',
      'credits' => '4',
    ),
    434 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Fitness, Wellness and Nutrition',
    ),
    435 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Food and Dairy Microbiology',
      'credits' => '6',
    ),
    436 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Foreign Trade',
      'credits' => '4',
    ),
    437 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Foreign Trade',
      'credits' => '4',
    ),
    438 => 
    array (
      'subject_category' => 'Additional Compulsory',
      'Subject' => 'Foundation Course - 1- Inter Religious Studies and
Social Harmony',
      'credits' => '1',
    ),
    439 => 
    array (
      'subject_category' => 'Additional Compulsory',
      'Subject' => 'Foundation Course – 2 – Personality Development',
      'credits' => '1',
    ),
    440 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Foundation Course-II – Personality Development.',
      'credits' => '1',
    ),
    441 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Foundation Course-I-Inter religious Studies & Social Harmony',
      'credits' => '1',
    ),
    442 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Foundation in Algebra',
      'credits' => '6',
    ),
    443 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Foundation in Calculus and Geometry',
      'credits' => '6',
    ),
    444 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Fundamentals of Advertising',
      'credits' => '5',
    ),
    445 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Fundamentals of Biochemistry',
      'credits' => '6',
    ),
    446 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Fundamentals of Financial Management',
      'credits' => '6',
    ),
    447 => 
    array (
      'subject_category' => 'Discipline Core',
      'Subject' => 'FUNDAMENTALS OF FINANCIAL MANAGEMENT',
    ),
    448 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Fundamentals of Indian medicine system (Ayurveda)',
      'credits' => '6',
    ),
    449 => 
    array (
      'subject_category' => 'Generice Elective I ',
      'Subject' => 'FUNDAMENTALS OF INFORMATION TECHNOLOGY',
    ),
    450 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Fundamentals of Management & Organizational Behaviour',
      'credits' => '6',
    ),
    451 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Fundamentals of Technology Management',
      'credits' => '4',
    ),
    452 => 
    array (
      'subject_category' => 'Generice Elective IV',
      'Subject' => 'Fundamentals of Web Programming',
    ),
    453 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => '',
    ),
    454 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'General Cartography',
    ),
    455 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'General Mathematics I',
    ),
    456 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'General Mathematics II',
    ),
    457 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Genetics',
      'credits' => '6',
    ),
    458 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Genetics and Evolutionary Biology',
      'credits' => '6',
    ),
    459 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Geography of India',
    ),
    460 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Geography of India',
      'credits' => '6',
    ),
    461 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Geomorphology',
      'credits' => '6',
    ),
    462 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Global Politics',
      'credits' => '6',
    ),
    463 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Global Politics',
      'credits' => '6',
    ),
    464 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Greek Philosophy',
      'credits' => '6',
    ),
    465 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Green Methods in Chemistry',
      'credits' => '4',
    ),
    466 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Group Theory - I',
      'credits' => '6',
    ),
    467 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Group Theory - II',
      'credits' => '6',
    ),
    468 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Group Theory-II and Linear Algebra-I',
      'credits' => '6',
    ),
    469 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Gym Operations',
    ),
    470 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Health Education, Anatomy and Physiology',
    ),
    471 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Hindi',
    ),
    472 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Historical Tourism: Theory and Practice',
    ),
    473 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'History   of    Culture    of    the    Linguistic Community',
    ),
    474 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'History  of  India  from  Earliest  Times  up  to c.300 CE',
    ),
    475 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'History of  Bengali Literature',
      'credits' => '6',
    ),
    476 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'History of  Literature',
      'credits' => '6',
    ),
    477 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'History of Bengali Folk Culture',
    ),
    478 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'History of East Asia 1',
    ),
    479 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'History of India c. 1200 to 1700',
    ),
    480 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'History of India c. 1700 to 1950',
    ),
    481 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'History of India from c.300 CE up to 1200 CE',
    ),
    482 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'History of India II',
    ),
    483 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'History of India III (750 – 1206)',
    ),
    484 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'History of India IV 1206-1550',
    ),
    485 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'History of India VI (c. 1750-1857) with emphasis on Bengal',
    ),
    486 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'History of India VII 1605 – 1750',
    ),
    487 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'History of India VIII (1857 – 1950) with emphasis on Bengal',
    ),
    488 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'History of India-I',
      'credits' => '6',
    ),
    489 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'History of India-I',
    ),
    490 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'History of India-II',
      'credits' => '6',
    ),
    491 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'History of India-III (c.750-1200)',
      'credits' => '6',
    ),
    492 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'History of India-IV (c.1200-1500)',
      'credits' => '6',
    ),
    493 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'History of India-V (c.1500-1600)',
      'credits' => '6',
    ),
    494 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'History of India-VI (c.1750-1857)',
      'credits' => '6',
    ),
    495 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'History of India-VII',
    ),
    496 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'History of India-VII (c.1600-1750)',
      'credits' => '6',
    ),
    497 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'History of India-VIII (c.1857-1950)',
      'credits' => '6',
    ),
    498 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'History of Modern China (1840-1960) / Global Environmental Perspectives',
      'credits' => '6',
    ),
    499 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'History of Modern East Asia II',
    ),
    500 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'History of Modern Europe 1780 – 1939',
    ),
    501 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'History of Modern Europe -I',
      'credits' => '6',
    ),
    502 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'History of Modern Europe -II',
      'credits' => '6',
    ),
    503 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'History of Modern Japan and Korea (1868-1950s) / The Making of Contemporary India (1950-1990s)',
      'credits' => '6',
    ),
    504 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'History of the United States of America I',
    ),
    505 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'History of the United States of America II',
    ),
    506 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'History of the USA: Independence to Civil War / Gender in Indian History I',
      'credits' => '6',
    ),
    507 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'History of the USA: Reconstruction to New Age Politics / Gender in Indian History II',
      'credits' => '6',
    ),
    508 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'HTML',
    ),
    509 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'HTML Programming',
    ),
    510 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Human Geography',
    ),
    511 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Human Geography',
      'credits' => '6',
    ),
    512 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Human Resource Management',
      'credits' => '6',
    ),
    513 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Human Resource Management',
      'credits' => '6',
    ),
    514 => 
    array (
      'subject_category' => 'Discipline Core',
      'Subject' => 'HUMAN RESOURCE MANAGEMENT',
    ),
    515 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Human Resources Management',
      'credits' => '5',
    ),
    516 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Human Rights in Comparative Perspective',
      'credits' => '6',
    ),
    517 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Human Rights, Good Governance and Redressal Mechanisms',
      'credits' => '6',
    ),
    518 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Human Rights. Gender and Environment',
    ),
    519 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Hydrology and Oceanography',
      'credits' => '6',
    ),
    520 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Immunology',
      'credits' => '6',
    ),
    521 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Immunology',
      'credits' => '6',
    ),
    522 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Immunology',
      'credits' => '6',
    ),
    523 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Income Tax-I',
      'credits' => '5',
    ),
    524 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Income Tax-I',
      'credits' => '5',
    ),
    525 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Income Tax-I',
      'credits' => '5',
    ),
    526 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Income Tax-II',
      'credits' => '5',
    ),
    527 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Income Tax-II',
      'credits' => '5',
    ),
    528 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Income Tax-II',
      'credits' => '5',
    ),
    529 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Indian Administration / Contemporary Social Issues in India/ Bangla Key Board and Typing',
      'credits' => '6',
    ),
    530 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Indian Art and Architecture / Understanding Popular Culture',
      'credits' => '4',
    ),
    531 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Indian Classical Literature',
      'credits' => '6',
    ),
    532 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Indian Constitution and Government',
      'credits' => '6',
    ),
    533 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Indian Constitution and Government',
      'credits' => '6',
    ),
    534 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Indian Economy',
      'credits' => '6',
    ),
    535 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Indian Economy',
      'credits' => '6',
    ),
    536 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Indian Economy I',
      'credits' => '6',
    ),
    537 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Indian Economy II',
      'credits' => '6',
    ),
    538 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Indian Epigraphy, Paleography and Chronology',
      'credits' => '6',
    ),
    539 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Indian Government and Politics',
    ),
    540 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Indian Government and Politics',
      'credits' => '6',
    ),
    541 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Indian History and Culture',
    ),
    542 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Indian Literature: Study of  an Important Author',
      'credits' => '6',
    ),
    543 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Indian Ontology and Epistemology',
      'credits' => '6',
    ),
    544 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Indian Philosophy',
    ),
    545 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Indian Philosophy',
      'credits' => '6',
    ),
    546 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Indian Political Thought-I',
      'credits' => '6',
    ),
    547 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Indian Political Thought-II',
      'credits' => '6',
    ),
    548 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Indian Social Institution and Polity',
      'credits' => '6',
    ),
    549 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Indian Sociological Traditions',
      'credits' => '6',
    ),
    550 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Indian Theatre',
    ),
    551 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Indian Writing in English',
      'credits' => '6',
    ),
    552 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Indian Writing in English',
      'credits' => '6',
    ),
    553 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'India\'s Foreign Policy in a Globalizing World',
      'credits' => '6',
    ),
    554 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Individual and Society',
    ),
    555 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Inductive Logic',
    ),
    556 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Industrial and Environmental Microbiology',
      'credits' => '6',
    ),
    557 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Industrial and Food microbiology',
      'credits' => '6',
    ),
    558 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Industrial Chemicals and Environment',
      'credits' => '6',
    ),
    559 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Industrial Microbiology',
      'credits' => '6',
    ),
    560 => 
    array (
      'subject_category' => 'Skill Enhancement III',
      'Subject' => 'INFORMATION SYSTEMS CONTROL AND AUDIT',
    ),
    561 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Information Technology',
      'credits' => '4',
    ),
    562 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Information Technology',
      'credits' => '4',
    ),
    563 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Information Technology',
      'credits' => '4',
    ),
    564 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Inheritance Biology',
      'credits' => '6',
    ),
    565 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Inorganic Chemistry 1',
      'credits' => '6',
    ),
    566 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Inorganic Chemistry 2',
      'credits' => '6',
    ),
    567 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Inorganic Chemistry 3',
      'credits' => '6',
    ),
    568 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Inorganic Chemistry 4',
      'credits' => '6',
    ),
    569 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Inorganic Chemistry 5',
      'credits' => '6',
    ),
    570 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Inorganic Chemistry I',
      'credits' => '6',
    ),
    571 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Inorganic Chemistry II',
      'credits' => '6',
    ),
    572 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Inorganic Chemistry III',
      'credits' => '6',
    ),
    573 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Inorganic Chemistry IV',
      'credits' => '6',
    ),
    574 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Input-Output Analysis',
      'credits' => '6',
    ),
    575 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Instrumental Methods of Chemical Analysis',
      'credits' => '6',
    ),
    576 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Intellectual Property Rights',
      'credits' => '4',
    ),
    577 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Intellectual Property Rights',
      'credits' => '4',
    ),
    578 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Intermediate Macroeconomics – I',
      'credits' => '6',
    ),
    579 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Intermediate Macroeconomics I',
      'credits' => '6',
    ),
    580 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Intermediate Macroeconomics- II',
      'credits' => '6',
    ),
    581 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Intermediate Macroeconornics II',
      'credits' => '6',
    ),
    582 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Intermediate Microeconomics – I',
      'credits' => '6',
    ),
    583 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Intermediate Microeconomics – II',
      'credits' => '6',
    ),
    584 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Intermediate Microeconomics I',
      'credits' => '6',
    ),
    585 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Intermediate Microeconomics II',
      'credits' => '6',
    ),
    586 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'International Advertising',
      'credits' => '4',
    ),
    587 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'International Business',
      'credits' => '5',
    ),
    588 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'International Economics',
      'credits' => '6',
    ),
    589 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'International Relations and Organisation',
      'credits' => '6',
    ),
    590 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'International Relations and Organization',
      'credits' => '6',
    ),
    591 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'International Relations and Organization',
      'credits' => '6',
    ),
    592 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'International Relations: Theories and Issues',
      'credits' => '6',
    ),
    593 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Internet Technologies',
    ),
    594 => 
    array (
      'subject_category' => 'Skill Enhancement Elective Course',
      'Subject' => 'Internship Programme',
      'credits' => '4',
    ),
    595 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Introduction to Algebra and Calculus',
      'credits' => '6',
    ),
    596 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Introduction to Algebra and Calculus',
      'credits' => '6',
    ),
    597 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Introduction to C Programming',
      'credits' => '2',
    ),
    598 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Introduction to Comparative Government and Politics',
      'credits' => '6',
    ),
    599 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Introduction to Comparative Government and Politics',
      'credits' => '6',
    ),
    600 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Introduction to Human Rights: History and Perspective',
      'credits' => '6',
    ),
    601 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Introduction to Information Technology',
      'credits' => '4',
    ),
    602 => 
    array (
      'subject_category' => 'Discipline Core',
      'Subject' => 'INTRODUCTION TO INTERNATIONAL BUSINESS',
    ),
    603 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Introduction to International Relations',
    ),
    604 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Introduction to Journalism/Legislative Practices and procedures/Orality and Oral Culture in India',
    ),
    605 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Introduction to Mass Communication I',
      'credits' => '6',
    ),
    606 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Introduction to Mass Communication II',
      'credits' => '6',
    ),
    607 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Introduction to Mass Communication/ Creating legal Awareness/ Museums &Archives in India',
      'credits' => '2',
    ),
    608 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Introduction to Media and Cultural Studies',
      'credits' => '6',
    ),
    609 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Introduction to Microbiology and Microbial Diversity',
      'credits' => '6',
    ),
    610 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Introduction to Physical Education in the
Contemporary Context',
    ),
    611 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Introduction to Political Theory',
    ),
    612 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Introduction to Political Theory',
      'credits' => '6',
    ),
    613 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Introduction to Sociology',
      'credits' => '6',
    ),
    614 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Introduction to Sociology - I',
      'credits' => '6',
    ),
    615 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Introduction to Sociology - II',
      'credits' => '6',
    ),
    616 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Introduction to Sociology / History of Literature, Novel and Drama',
      'credits' => '6',
    ),
    617 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Introduction to Sociology I',
      'credits' => '6',
    ),
    618 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Introduction to Sociology II',
      'credits' => '6',
    ),
    619 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Introduction to Visual Culture and Still',
      'credits' => '6',
    ),
    620 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Introductory Econometrics',
      'credits' => '6',
    ),
    621 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Introductory Econometrics',
      'credits' => '6',
    ),
    622 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Introductory Economics',
      'credits' => '6',
    ),
    623 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Introductory Macroeconomics',
      'credits' => '6',
    ),
    624 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Introductory Macroeconomics',
      'credits' => '6',
    ),
    625 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Introductory Macroeconomics',
      'credits' => '6',
    ),
    626 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Introductory Microbiology',
      'credits' => '6',
    ),
    627 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Introductory Microeconomics',
      'credits' => '6',
    ),
    628 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Introductory Microeconomics',
      'credits' => '6',
    ),
    629 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Introductory Microeconomics',
      'credits' => '6',
    ),
    630 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Introductory Probability',
      'credits' => '6',
    ),
    631 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Investment Analysis & Portfolio Management',
      'credits' => '6',
    ),
    632 => 
    array (
      'subject_category' => 'Discipline Core',
      'Subject' => 'INVESTMENT LAB',
    ),
    633 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Issues   in   World   History   –   I   (the   20th Century)',
    ),
    634 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Issues in Economic Development',
    ),
    635 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Issues in World History – II (the 20th Century)',
    ),
    636 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'IT Skills for Chemists',
      'credits' => '4',
    ),
    637 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'IT-LAB',
      'credits' => '1',
    ),
    638 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Kavyanatya:  A  Comparative  Study  between  Karnakunti Sambad and Pratham Partha',
      'credits' => '6',
    ),
    639 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Knowledge and Scepticism',
      'credits' => '6',
    ),
    640 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Language - 1 - Modern Indian Language Group',
      'credits' => '1',
    ),
    641 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'Language - 2 - Business Communication',
      'credits' => '1',
    ),
    642 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Language in Advertisement',
      'credits' => '4',
    ),
    643 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Language in Film',
      'credits' => '4',
    ),
    644 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Language in Printing and Publishing',
    ),
    645 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Language through Literature 1',
      'credits' => '6',
    ),
    646 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Language through Literature 2',
      'credits' => '6',
    ),
    647 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Language Varieties',
      'credits' => '6',
    ),
    648 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Language, Literature and Cultural Diversity',
    ),
    649 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Large Sample Theory',
      'credits' => '6',
    ),
    650 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Laser Physics & Fibre Optics',
      'credits' => '6',
    ),
    651 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Latex and HTML',
      'credits' => '4',
    ),
    652 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Legal Aspects of Business',
      'credits' => '6',
    ),
    653 => 
    array (
      'subject_category' => 'Discipline Core',
      'Subject' => 'LEGAL ASPECTS OF BUSINESS',
    ),
    654 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Legislative Support',
    ),
    655 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Linear Models',
      'credits' => '6',
    ),
    656 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Linear Programming and Game Theory / Topology & Functional Analysis',
      'credits' => '6',
    ),
    657 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Linear Programming and Theory of Games',
      'credits' => '6',
    ),
    658 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Linguistics & Stylistics',
      'credits' => '6',
    ),
    659 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Literary Debates & Aesthetic Theory',
      'credits' => '6',
    ),
    660 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Literary Texts',
    ),
    661 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Literary Theory',
      'credits' => '6',
    ),
    662 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Literary Theory, Bangla Films & Literature',
      'credits' => '6',
    ),
    663 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Literature & Language 1 / Women Studies In India & Women in Politics & Governance/ Introduction to Human Rights',
      'credits' => '6',
    ),
    664 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Literature & Language 2/ Cultures In the Indian Subcontinent/ Human Rights, Good Governance and Redressal Mechanism',
      'credits' => '6',
    ),
    665 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Literature and Cinema',
      'credits' => '6',
    ),
    666 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Literature of the Indian Diaspora',
      'credits' => '6',
    ),
    667 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Logic',
    ),
    668 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Logic',
      'credits' => '6',
    ),
    669 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Machine Translation: Tools and Techniques',
      'credits' => '4',
    ),
    670 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Macro Economics',
      'credits' => '6',
    ),
    671 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Macroeconomics',
      'credits' => '6',
    ),
    672 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Making of Contemporary India',
    ),
    673 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Management Accounting',
      'credits' => '6',
    ),
    674 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Management of Aerobics and Group Training',
    ),
    675 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Management Principles and Applications',
      'credits' => '6',
    ),
    676 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Managerial Accounting',
      'credits' => '4',
    ),
    677 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Managerial Accounting',
      'credits' => '4',
    ),
    678 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Managerial Accounting',
      'credits' => '4',
    ),
    679 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Managerial Economics',
      'credits' => '6',
    ),
    680 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Managerial Economics',
      'credits' => '5',
    ),
    681 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Managerial Economics',
      'credits' => '5',
    ),
    682 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Marketing Management',
      'credits' => '5',
    ),
    683 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Marketing of Services',
      'credits' => '6',
    ),
    684 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Marketing Research',
      'credits' => '5',
    ),
    685 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Marketing, Advertising and Public Relations',
      'credits' => '6',
    ),
    686 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Mass Communication and Journalism',
    ),
    687 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Mathematical Analysis',
      'credits' => '6',
    ),
    688 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Mathematical Methods in Economics – I',
    ),
    689 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Mathematical Methods in Economics – II',
      'credits' => '6',
    ),
    690 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Mathematical Methods in Economics I',
      'credits' => '6',
    ),
    691 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Mathematical Methods in Economics II',
      'credits' => '6',
    ),
    692 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Mathematical Methods, Mechanics, General Properties of Matter & Thermal Physics',
      'credits' => '6',
    ),
    693 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Mathematical Physics I',
      'credits' => '6',
    ),
    694 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Mathematical Physics I',
      'credits' => '6',
    ),
    695 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Mathematical Physics II',
      'credits' => '6',
    ),
    696 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Mathematical Physics II',
      'credits' => '6',
    ),
    697 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Mathematical Physics III',
      'credits' => '6',
    ),
    698 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Mathematical Physics III',
      'credits' => '6',
    ),
    699 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Mathematics I - Calculus',
      'credits' => '6',
    ),
    700 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Mathematics II - Linear algebra',
      'credits' => '6',
    ),
    701 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Mathematics II - Linear algebra',
      'credits' => '6',
    ),
    702 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Mathematics-I Calculus',
      'credits' => '6',
    ),
    703 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Measurement and Evaluation',
    ),
    704 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Mechanics',
      'credits' => '6',
    ),
    705 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Mechanics',
      'credits' => '6',
    ),
    706 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Mechanics',
      'credits' => '6',
    ),
    707 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Media Management',
      'credits' => '4',
    ),
    708 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Media Research & Planning',
      'credits' => '5',
    ),
    709 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Medical Diagnostics',
      'credits' => '4',
    ),
    710 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Medical Diagnostics',
      'credits' => '4',
    ),
    711 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Medical Microbiology',
      'credits' => '6',
    ),
    712 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Medieval Bangla Literature (Part-I)',
      'credits' => '6',
    ),
    713 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Medieval Bangla Literature (Part-II)',
      'credits' => '6',
    ),
    714 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Methods of Sociological Enquiry Metre, Figure of Speech and Bangla Novel',
      'credits' => '6',
    ),
    715 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Metric Spaces',
      'credits' => '6',
    ),
    716 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Micro Economics',
      'credits' => '6',
    ),
    717 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Microbial Genetics',
      'credits' => '6',
    ),
    718 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Microbial Physiology and Metabolism',
      'credits' => '6',
    ),
    719 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Microbiology and Phycology',
      'credits' => '6',
    ),
    720 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Microprocessor',
    ),
    721 => 
    array (
      'subject_category' => 'Ability Enhancement Compulsory Course',
      'Subject' => 'MIL (Alternative English)',
      'credits' => '2',
    ),
    722 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Modern Drama',
    ),
    723 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Modern European Drama',
      'credits' => '6',
    ),
    724 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Modern European Drama',
      'credits' => '6',
    ),
    725 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Modern Indian Political Thought - I',
      'credits' => '6',
    ),
    726 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Modern Indian Political Thought - II',
      'credits' => '6',
    ),
    727 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Modern Political Philosophy',
      'credits' => '6',
    ),
    728 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Modern Political Philosophy',
      'credits' => '6',
    ),
    729 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Modern Sanskrit Literature',
      'credits' => '6',
    ),
    730 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Molecular Biology',
      'credits' => '6',
    ),
    731 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Molecular Biology',
      'credits' => '6',
    ),
    732 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Molecular Biology',
      'credits' => '6',
    ),
    733 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Molecular Modeling and Drug Design',
      'credits' => '6',
    ),
    734 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Molecules of Life',
      'credits' => '6',
    ),
    735 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Money & Finance',
      'credits' => '6',
    ),
    736 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Motion in two dimension and Rigid Dynamics',
      'credits' => '6',
    ),
    737 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Multivariate Analysis and Non Parametric Methods',
      'credits' => '6',
    ),
    738 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Multivariate Calculus',
      'credits' => '6',
    ),
    739 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Museum and Archives in India',
    ),
    740 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Music and Sound Design',
      'credits' => '6',
    ),
    741 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Mycology and Phytopathology',
      'credits' => '6',
    ),
    742 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Nano Materials & Applications',
      'credits' => '6',
    ),
    743 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Nationalism in Sanskrit Literature',
    ),
    744 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Nationalistic Thought in Sanskrit Literature',
    ),
    745 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Nature, Body and Culture',
      'credits' => '6',
    ),
    746 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Nineteenth Century European Realism',
      'credits' => '6',
    ),
    747 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Non-chordates I: Protista to Pseudocoelomates',
      'credits' => '6',
    ),
    748 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Non-chordates II: Coelomates',
      'credits' => '6',
    ),
    749 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Novel Inorganic Solids',
      'credits' => '6',
    ),
    750 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Nuclear and Particle Physics',
      'credits' => '6',
    ),
    751 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Nuclear and Particle Physics',
      'credits' => '6',
    ),
    752 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Numerical Methods',
      'credits' => '6',
    ),
    753 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Numerical Methods',
      'credits' => '6',
    ),
    754 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Numerical Methods/
Probability and Statistics',
      'credits' => '6',
    ),
    755 => 
    array (
      'subject_category' => 'Generice Elective III',
      'Subject' => 'Object Oriented Programming',
    ),
    756 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Objective Oriented Programming with C++',
      'credits' => '5',
    ),
    757 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Operating System Linux',
    ),
    758 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Operating Systems',
      'credits' => '6',
    ),
    759 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Operating Systems',
    ),
    760 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Operation Research',
    ),
    761 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Oral Traditions: Folktales, Songs  and Myths',
      'credits' => '6',
    ),
    762 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Oral Traditions: Folktales, Songs and Myths',
    ),
    763 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Organic Chemistry 1',
      'credits' => '6',
    ),
    764 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Organic Chemistry 2',
      'credits' => '6',
    ),
    765 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Organic Chemistry 3',
      'credits' => '6',
    ),
    766 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Organic Chemistry 4',
      'credits' => '6',
    ),
    767 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Organic Chemistry 5',
      'credits' => '6',
    ),
    768 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Organic Chemistry I',
      'credits' => '6',
    ),
    769 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Organic Chemistry II',
      'credits' => '6',
    ),
    770 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Organic Chemistry III',
      'credits' => '6',
    ),
    771 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Organic Chemistry IV',
      'credits' => '6',
    ),
    772 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Organic Chemistry V',
      'credits' => '6',
    ),
    773 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Organization Behaviour',
      'credits' => '5',
    ),
    774 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Organometallics,    Bioinorganic    Chem, Polynuclear  Hydrocarbons;  UV  and  IR Spectroscopy',
      'credits' => '6',
    ),
    775 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Partial Differential Equations',
      'credits' => '6',
    ),
    776 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Partition Literature',
      'credits' => '6',
    ),
    777 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Peace and Conflict Resolution',
    ),
    778 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Peace and Conflict Resolution',
      'credits' => '4',
    ),
    779 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Perspectives in Ecology',
      'credits' => '6',
    ),
    780 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Perspectives on Indian Society',
      'credits' => '6',
    ),
    781 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Perspectives on International Relations and World History',
      'credits' => '6',
    ),
    782 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Perspectives on Public Administration',
      'credits' => '6',
    ),
    783 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Perspectives on Public Administration',
      'credits' => '6',
    ),
    784 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Philosophy of Language (Indian and Western)',
      'credits' => '6',
    ),
    785 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Philosophy of Law',
      'credits' => '6',
    ),
    786 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Philosophy of Religion',
    ),
    787 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Philosophy of Religion (Indian and Western)',
      'credits' => '6',
    ),
    788 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Philosophy of Science',
      'credits' => '6',
    ),
    789 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Philosophy, Religion and Culture Sanskrit Tradition',
    ),
    790 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'PHP Programming',
    ),
    791 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Physical Chemistry (Application)',
    ),
    792 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Physical Chemistry 1',
      'credits' => '6',
    ),
    793 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Physical Chemistry 2',
      'credits' => '6',
    ),
    794 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Physical Chemistry 3',
      'credits' => '6',
    ),
    795 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Physical Chemistry 4',
      'credits' => '6',
    ),
    796 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Physical Chemistry 5',
      'credits' => '6',
    ),
    797 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Physical Chemistry I',
      'credits' => '6',
    ),
    798 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Physical Chemistry II',
      'credits' => '6',
    ),
    799 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Physical Chemistry III',
      'credits' => '6',
    ),
    800 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Physical Chemistry IV',
      'credits' => '6',
    ),
    801 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Physical Chemistry V',
      'credits' => '6',
    ),
    802 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Physical Geography',
    ),
    803 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Physiology and Biochemistry',
      'credits' => '6',
    ),
    804 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Physiology: Controlling and Coordinating Systems',
      'credits' => '6',
    ),
    805 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Physiology: Life Sustaining Systems',
      'credits' => '6',
    ),
    806 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Plant Anatomy and Embryology',
      'credits' => '6',
    ),
    807 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Plant Biotechnology',
      'credits' => '6',
    ),
    808 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Plant Ecology and Taxonomy',
      'credits' => '6',
    ),
    809 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Plant Ecology and Taxonomy',
      'credits' => '6',
    ),
    810 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Plant Metabolism',
      'credits' => '6',
    ),
    811 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Plant Physiology',
      'credits' => '6',
    ),
    812 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Plant Physiology and Metabolism',
      'credits' => '6',
    ),
    813 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Plant Systematics',
      'credits' => '6',
    ),
    814 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Poetics and Literary Criticism',
      'credits' => '6',
    ),
    815 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Poetics, Prosody  and Current Trends in Literature',
      'credits' => '6',
    ),
    816 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Political Geography',
      'credits' => '6',
    ),
    817 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Political Process in India',
      'credits' => '6',
    ),
    818 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Political Process in India',
      'credits' => '6',
    ),
    819 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Political Processes and Institutions in Comparative Perspective',
      'credits' => '6',
    ),
    820 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Political Processes and Institutions in Comparative Perspective',
      'credits' => '6',
    ),
    821 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Political Sociology',
      'credits' => '6',
    ),
    822 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Political Sociology',
      'credits' => '6',
    ),
    823 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Political Sociology',
      'credits' => '6',
    ),
    824 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Political Theory - Concepts and Debates',
      'credits' => '6',
    ),
    825 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Political Theory-Concepts and Debates',
      'credits' => '6',
    ),
    826 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Politics of South Asia',
      'credits' => '6',
    ),
    827 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Popular Literature',
      'credits' => '6',
    ),
    828 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Popular Literature',
      'credits' => '6',
    ),
    829 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Population Geography',
      'credits' => '6',
    ),
    830 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Postcolonial Literatures',
      'credits' => '6',
    ),
    831 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Postcolonial Literatures',
      'credits' => '6',
    ),
    832 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Posture, Athletic Care and First Aid',
    ),
    833 => 
    array (
      'subject_category' => ' Skill Enhancement Course',
      'Subject' => 'Practice of General Insurance',
      'credits' => '2',
    ),
    834 => 
    array (
      'subject_category' => ' Skill Enhancement Course',
      'Subject' => 'Practice of General Insurance',
      'credits' => '2',
    ),
    835 => 
    array (
      'subject_category' => ' Skill Enhancement Course',
      'Subject' => 'Practice of General Insurance',
      'credits' => '2',
    ),
    836 => 
    array (
      'subject_category' => ' Skill Enhancement Course',
      'Subject' => 'Practice of Life Insurance',
      'credits' => '2',
    ),
    837 => 
    array (
      'subject_category' => ' Skill Enhancement Course',
      'Subject' => 'Practice of Life Insurance',
      'credits' => '2',
    ),
    838 => 
    array (
      'subject_category' => ' Skill Enhancement Course',
      'Subject' => 'Practice of Life Insurance',
      'credits' => '2',
    ),
    839 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Principles of Genetics',
      'credits' => '6',
    ),
    840 => 
    array (
      'subject_category' => ' Skill Enhancement Course',
      'Subject' => 'Principles of Insurance',
      'credits' => '2',
    ),
    841 => 
    array (
      'subject_category' => ' Skill Enhancement Course',
      'Subject' => 'Principles of Insurance',
      'credits' => '2',
    ),
    842 => 
    array (
      'subject_category' => ' Skill Enhancement Course',
      'Subject' => 'Principles of Insurance Business',
      'credits' => '2',
    ),
    843 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Principles of Macroeconomics I',
    ),
    844 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Principles of Macroeconomics II',
    ),
    845 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Principles of Management',
      'credits' => '5',
    ),
    846 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Principles of Management',
      'credits' => '4',
    ),
    847 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Principles of Management',
      'credits' => '4',
    ),
    848 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Principles of Management',
      'credits' => '4',
    ),
    849 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Principles of Marketing',
      'credits' => '6',
    ),
    850 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Principles of Marketing',
      'credits' => '6',
    ),
    851 => 
    array (
      'subject_category' => 'Discipline Core',
      'Subject' => 'PRINCIPLES OF MARKETING',
    ),
    852 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Principles of Microeconomics I',
    ),
    853 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Principles of Microeconomics II',
    ),
    854 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Print and New Media',
    ),
    855 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Probability and Probability Distributions I',
      'credits' => '6',
    ),
    856 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Probability and Probability Distributions II',
      'credits' => '6',
    ),
    857 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Probability Theory and Multivariate Calculus',
      'credits' => '6',
    ),
    858 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Probability Theory and Statistics',
      'credits' => '6',
    ),
    859 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Problem Solving Using Computers',
      'credits' => '6',
    ),
    860 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Production and Operations Management',
      'credits' => '6',
    ),
    861 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Programming Fundamentals using C/C++',
    ),
    862 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Programming in Java',
      'credits' => '4',
    ),
    863 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Programming in JAVA',
    ),
    864 => 
    array (
      'subject_category' => 'Generice Elective II',
      'Subject' => 'PROGRAMMING METHODOLOGIES',
    ),
    865 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Programming with C',
      'credits' => '5',
    ),
    866 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Project',
      'credits' => '5',
    ),
    867 => 
    array (
      'subject_category' => 'Department Elective I',
      'Subject' => 'PROJECT',
    ),
    868 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Project Appraisal & Analysis',
      'credits' => '6',
    ),
    869 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Project Work',
      'credits' => '4',
    ),
    870 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Public Administration/ Religion and Society / Linguistics and Ability Teaching',
      'credits' => '6',
    ),
    871 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Public Economics',
      'credits' => '6',
    ),
    872 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Public Opinion and Survey Research',
    ),
    873 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Public Policy and Administration in India',
      'credits' => '6',
    ),
    874 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Public Policy and Administration in India',
      'credits' => '6',
    ),
    875 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Quantitative Techniques for Business',
      'credits' => '5',
    ),
    876 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Quantitative Techniques for Management',
      'credits' => '6',
    ),
    877 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Quantum Mechanics & Applications',
      'credits' => '6',
    ),
    878 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Quantum Mechanics and Applications',
      'credits' => '6',
    ),
    879 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'R Programming',
      'credits' => '2',
    ),
    880 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Reading Ethnographies',
      'credits' => '6',
    ),
    881 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Reading Ethnography',
      'credits' => '2',
    ),
    882 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Reading Gandhi',
    ),
    883 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Reading Images',
      'credits' => '6',
    ),
    884 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Reading Skills in Brahmi Scripts',
      'credits' => '4',
    ),
    885 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Reading, Writing and Reasoning for Sociology',
      'credits' => '4',
    ),
    886 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Real Analysis',
      'credits' => '6',
    ),
    887 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Real Analysis',
      'credits' => '6',
    ),
    888 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Real Analysis-I',
      'credits' => '6',
    ),
    889 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Real Analysis-II',
      'credits' => '6',
    ),
    890 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Recombinant DNA technology',
      'credits' => '6',
    ),
    891 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    892 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    893 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    894 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    895 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    896 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    897 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    898 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    899 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    900 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    901 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    902 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    903 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    904 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    905 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    906 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    907 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    908 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    909 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    910 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    911 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    912 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    913 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    914 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    915 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    916 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    917 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    918 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    919 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    920 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    921 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    922 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    923 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    924 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 27)',
      'credits' => '6',
    ),
    925 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 33)',
      'credits' => '6',
    ),
    926 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 33)',
      'credits' => '6',
    ),
    927 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 33)',
      'credits' => '6',
    ),
    928 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 33)',
      'credits' => '6',
    ),
    929 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 34)',
      'credits' => '6',
    ),
    930 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 34)',
      'credits' => '6',
    ),
    931 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 35)',
      'credits' => '6',
    ),
    932 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table (page 35)',
      'credits' => '6',
    ),
    933 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table GE.1 (page 27)',
      'credits' => '6',
    ),
    934 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table GE.3 (page 27)',
      'credits' => '6',
    ),
    935 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Refer Table I',
      'credits' => '6',
    ),
    936 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Refer Table I',
      'credits' => '6',
    ),
    937 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Refer Table I',
      'credits' => '6',
    ),
    938 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Refer Table I',
      'credits' => '6',
    ),
    939 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Refer Table I',
      'credits' => '6',
    ),
    940 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Refer Table I',
      'credits' => '6',
    ),
    941 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Refer Table I',
      'credits' => '6',
    ),
    942 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Refer Table I',
      'credits' => '6',
    ),
    943 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Refer Table II',
      'credits' => '4',
    ),
    944 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Refer Table II',
      'credits' => '4',
    ),
    945 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Refer Table II',
      'credits' => '4',
    ),
    946 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Refer Table II',
      'credits' => '4',
    ),
    947 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Refer Table III',
      'credits' => '6',
    ),
    948 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Refer Table III',
      'credits' => '6',
    ),
    949 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Refer Table III',
      'credits' => '6',
    ),
    950 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Refer Table III',
      'credits' => '6',
    ),
    951 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table IV',
      'credits' => '6',
    ),
    952 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Refer Table IV',
      'credits' => '6',
    ),
    953 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Regional Planning and Development',
      'credits' => '6',
    ),
    954 => 
    array (
      'subject_category' => ' Skill Enhancement Course',
      'Subject' => 'Regulation of Insurance Business',
      'credits' => '2',
    ),
    955 => 
    array (
      'subject_category' => ' Skill Enhancement Course',
      'Subject' => 'Regulation of Insurance Business',
      'credits' => '2',
    ),
    956 => 
    array (
      'subject_category' => ' Skill Enhancement Course',
      'Subject' => 'Regulation of Insurance Business',
      'credits' => '2',
    ),
    957 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Relational Database Management
Systems',
      'credits' => '5',
    ),
    958 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Relational Database Management
Systems',
      'credits' => '5',
    ),
    959 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Remote Sensing (Practical)',
      'credits' => '4',
    ),
    960 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Remote Sensing and GIS (Practical)',
      'credits' => '6',
    ),
    961 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Renewable Energy and Energy Harvesting',
      'credits' => '4',
    ),
    962 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Reproductive Biology of Angiosperms',
      'credits' => '6',
    ),
    963 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Research Methodology',
      'credits' => '2',
    ),
    964 => 
    array (
      'subject_category' => 'Discipline Core',
      'Subject' => 'RESEARCH METHODOLOGY',
    ),
    965 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Research Methodology (simpler version)',
    ),
    966 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Research Methodology I',
      'credits' => '2',
    ),
    967 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Research Methodology II',
      'credits' => '2',
    ),
    968 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Research Methodology in History',
    ),
    969 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Research Methods',
      'credits' => '6',
    ),
    970 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Research Methods (Practical)',
      'credits' => '4',
    ),
    971 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Research Project',
      'credits' => '6',
    ),
    972 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Riemann Integration and Metric Spaces-I',
      'credits' => '6',
    ),
    973 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Riemann Integration and Series of Functions',
      'credits' => '6',
    ),
    974 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Ring Theory and Linear Algebra - I',
      'credits' => '6',
    ),
    975 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Ring Theory and Linear Algebra - II',
      'credits' => '6',
    ),
    976 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Ring Theory-I and Linear Algebra-II',
      'credits' => '6',
    ),
    977 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Rise of the Modern West - I',
      'credits' => '6',
    ),
    978 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Rise of the Modern West - II',
      'credits' => '6',
    ),
    979 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Rise of the Modern West I',
    ),
    980 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Rise of the Modern West II',
    ),
    981 => 
    array (
      'subject_category' => 'Discipline Core',
      'Subject' => 'SALES MANAGEMENT',
    ),
    982 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Sampling Distributions and Statistical Inference',
      'credits' => '6',
    ),
    983 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Sampling Distributions and Statistical Inference I',
      'credits' => '6',
    ),
    984 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Sanskrit and world Literature',
      'credits' => '6',
    ),
    985 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Sanskrit Composition and Communication',
      'credits' => '6',
    ),
    986 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Sanskrit Drama',
    ),
    987 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Sanskrit Grammar',
    ),
    988 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Sanskrit Grammer',
      'credits' => '6',
    ),
    989 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Sanskrit Linguistics',
      'credits' => '6',
    ),
    990 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Sanskrit Poetry',
    ),
    991 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Sanskrit Prose',
    ),
    992 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Science and Detective Fiction',
      'credits' => '6',
    ),
    993 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Script Writing II',
      'credits' => '6',
    ),
    994 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Scriptwriting I',
      'credits' => '6',
    ),
    995 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Second Language',
      'credits' => '5',
    ),
    996 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Second Language',
      'credits' => '5',
    ),
    997 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Second Language',
      'credits' => '5',
    ),
    998 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Second Language',
      'credits' => '5',
    ),
    999 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Second Language',
      'credits' => '5',
    ),
    1000 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Second Language',
      'credits' => '5',
    ),
    1001 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Second Language',
      'credits' => '5',
    ),
    1002 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Second Language',
      'credits' => '5',
    ),
    1003 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Second Language',
      'credits' => '5',
    ),
    1004 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Second Language',
      'credits' => '5',
    ),
    1005 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Second Language',
      'credits' => '5',
    ),
    1006 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Second Language',
      'credits' => '5',
    ),
    1007 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Second Language',
      'credits' => '5',
    ),
    1008 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Selected Texts: Novel and Short Stories',
    ),
    1009 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Selected Texts: Poetry and Plays',
    ),
    1010 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Selection from Living Literatures',
    ),
    1011 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Selections from Modern Indian Literature',
    ),
    1012 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Self Management in the Geeta',
      'credits' => '6',
    ),
    1013 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Sericulture',
      'credits' => '4',
    ),
    1014 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Sericulture',
      'credits' => '4',
    ),
    1015 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Series and Sequence of Functions and Complex Analysis',
      'credits' => '6',
    ),
    1016 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'S-Language-II',
      'credits' => '5',
    ),
    1017 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'S-Language-II',
      'credits' => '5',
    ),
    1018 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'S-Language-II',
      'credits' => '5',
    ),
    1019 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Social and Political Philosophy - Indian and Western',
      'credits' => '6',
    ),
    1020 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Social Formations and Cultural Patterns of Ancient Greece',
    ),
    1021 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Social Formations and Cultural Patterns of the Ancient and Medieval World - II',
      'credits' => '6',
    ),
    1022 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Social Formations and Cultural Patterns of the Ancient World - I',
      'credits' => '6',
    ),
    1023 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Social Formations and Cultural Patterns of the Medieval World',
    ),
    1024 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Social Stratification',
      'credits' => '6',
    ),
    1025 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Social Stratification',
      'credits' => '6',
    ),
    1026 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Socio-cultural and political developments in 19th and 20th century Bengal',
    ),
    1027 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Sociological Research Methods - I',
      'credits' => '6',
    ),
    1028 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Sociological Research Methods - II',
      'credits' => '6',
    ),
    1029 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Sociological Research Methods -I',
      'credits' => '6',
    ),
    1030 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Sociological Research methods -II',
      'credits' => '6',
    ),
    1031 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Sociological Theory Folk Literature, Essay and Poems of Tagore',
      'credits' => '6',
    ),
    1032 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Sociological Thinkers - I',
      'credits' => '6',
    ),
    1033 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Sociological Thinkers - II',
      'credits' => '6',
    ),
    1034 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Sociological Thinkers II',
      'credits' => '6',
    ),
    1035 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Sociology of Gender',
      'credits' => '6',
    ),
    1036 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Sociology of Gender',
      'credits' => '6',
    ),
    1037 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Sociology of India - I',
      'credits' => '6',
    ),
    1038 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Sociology of India - II',
      'credits' => '6',
    ),
    1039 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Sociology of India I',
      'credits' => '6',
    ),
    1040 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Sociology of India II',
      'credits' => '6',
    ),
    1041 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Sociology of India Literary Genre, Short Stories and Medieval Text',
      'credits' => '6',
    ),
    1042 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Sociology of Kinship',
      'credits' => '6',
    ),
    1043 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Sociology of Kinship',
      'credits' => '6',
    ),
    1044 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Sociology of Religion',
      'credits' => '6',
    ),
    1045 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Sociology of Religion',
      'credits' => '6',
    ),
    1046 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Sociology of Thinkers -I',
      'credits' => '6',
    ),
    1047 => 
    array (
      'subject_category' => 'Professional Enhancement',
      'Subject' => 'SOFT SKILLS',
    ),
    1048 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Software Engineering',
    ),
    1049 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Solid State Physics',
      'credits' => '6',
    ),
    1050 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Solid State Physics',
      'credits' => '6',
    ),
    1051 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Solid State Physics',
      'credits' => '6',
    ),
    1052 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Special Paper: Tagore’s Literature',
      'credits' => '6',
    ),
    1053 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Sports Journalism',
    ),
    1054 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Sports Psychology',
    ),
    1055 => 
    array (
      'subject_category' => 'Workshop',
      'Subject' => 'SPREADSHEET MODELLING ',
    ),
    1056 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Statistical Data Analysis using R',
      'credits' => '2',
    ),
    1057 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Statistical Inference II',
      'credits' => '6',
    ),
    1058 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Statistical Mechanics',
      'credits' => '6',
    ),
    1059 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Statistical Mechanics',
      'credits' => '6',
    ),
    1060 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Statistical Methods for Economics',
      'credits' => '6',
    ),
    1061 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Statistical Methods for Economics',
      'credits' => '6',
    ),
    1062 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Statistical Methods in Geography (Practical)',
      'credits' => '6',
    ),
    1063 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Statistical Quality Control',
      'credits' => '6',
    ),
    1064 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Statistics',
    ),
    1065 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Stochastic Process and Time Series',
      'credits' => '6',
    ),
    1066 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Strategic Corporate Finance',
      'credits' => '6',
    ),
    1067 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Strategic Management',
      'credits' => '5',
    ),
    1068 => 
    array (
      'subject_category' => 'Skill Enhancement I',
      'Subject' => 'STRATEGIC MANAGEMENT',
    ),
    1069 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Study of  a Text',
      'credits' => '6',
    ),
    1070 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Study of an Important Author',
    ),
    1071 => 
    array (
      'subject_category' => 'Department Elective II',
      'Subject' => 'SUMMER PROJECT',
    ),
    1072 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Survey Sampling and Indian Official Statistics',
      'credits' => '6',
    ),
    1073 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Sustainability and Development',
    ),
    1074 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Taxation and Tax Planning',
      'credits' => '6',
    ),
    1075 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Technical Writing
GIS based Project Report (Practical)',
    ),
    1076 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Techniques of Ethnographic Film Making',
      'credits' => '4',
    ),
    1077 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Technology and Ethics',
    ),
    1078 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Television and Radio',
    ),
    1079 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Television Studies',
      'credits' => '6',
    ),
    1080 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Text of Indian Philosophy',
      'credits' => '6',
    ),
    1081 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Text of Western Philosophy',
      'credits' => '6',
    ),
    1082 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'The Indian Economy: Evolution, Development and structural change',
    ),
    1083 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Thematic Cartography (Practical)',
      'credits' => '6',
    ),
    1084 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Themes in Comparative Political Theory (Hindi Medium)
Administration and Public Policy: Concepts and Theories (English Medium)',
    ),
    1085 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Theory of Computation',
    ),
    1086 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Theory of Real Function',
      'credits' => '6',
    ),
    1087 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Thermal Physics',
      'credits' => '6',
    ),
    1088 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Thermal Physics',
      'credits' => '6',
    ),
    1089 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Thermal Physics and Statistical Mechanics',
      'credits' => '6',
    ),
    1090 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Topics in Microeconomics',
      'credits' => '6',
    ),
    1091 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Translation Studies',
      'credits' => '4',
    ),
    1092 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Transportation and Game Theory',
    ),
    1093 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Truth Functional Logic',
      'credits' => '6',
    ),
    1094 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'TV Production and Media Management',
      'credits' => '6',
    ),
    1095 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Understanding Globalisation (Hindi Medium) Democracy and Governance (English Medium)',
    ),
    1096 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Understanding Heritage / Archives and Museums',
      'credits' => '4',
    ),
    1097 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'UNDERSTANDING POETRY',
      'credits' => '2',
    ),
    1098 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Understanding Political Theory',
      'credits' => '6',
    ),
    1099 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Understanding Political Theory',
      'credits' => '6',
    ),
    1100 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Understanding the Economic Survey and Union Budget',
    ),
    1101 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Urban Geography',
      'credits' => '6',
    ),
    1102 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Urban Sociology',
      'credits' => '6',
    ),
    1103 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Vector Calculus and Ring Theory-II',
      'credits' => '6',
    ),
    1104 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Vedic Literature',
      'credits' => '6',
    ),
    1105 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Vibrations, Waves and Optics & Electromagnetism',
      'credits' => '6',
    ),
    1106 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Videography II and Editing II',
      'credits' => '6',
    ),
    1107 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Videography III and Editing III',
      'credits' => '6',
    ),
    1108 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Virology',
      'credits' => '6',
    ),
    1109 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Visual and Performing Arts',
      'credits' => '6',
    ),
    1110 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Visual Culture',
      'credits' => '6',
    ),
    1111 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Wave and Optics',
      'credits' => '6',
    ),
    1112 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Waves and Optics',
      'credits' => '6',
    ),
    1113 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Waves and Optics',
      'credits' => '6',
    ),
    1114 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Web Technologies',
      'credits' => '5',
    ),
    1115 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Wellness, Fitness and Nutrition',
    ),
    1116 => 
    array (
      'subject_category' => 'Discipline Specific Course',
      'Subject' => 'Western Philosophy',
    ),
    1117 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Western Philosophy - Descartes to Kant',
      'credits' => '6',
    ),
    1118 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Western Political Thought',
    ),
    1119 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'Wild Life Conservation and Management',
      'credits' => '6',
    ),
    1120 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Women in Indian History',
    ),
    1121 => 
    array (
      'subject_category' => 'Discipline Specific Core',
      'Subject' => 'Women’s Writing',
      'credits' => '6',
    ),
    1122 => 
    array (
      'subject_category' => 'Core Course',
      'Subject' => 'Women\'s Writing',
      'credits' => '6',
    ),
    1123 => 
    array (
      'subject_category' => 'Discipline Specific Elective',
      'Subject' => 'World Literature',
    ),
    1124 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Writing Skill & Bangla Literary Style-I',
      'credits' => '2',
    ),
    1125 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Writing Skill & Bangla Literary Style-II',
      'credits' => '2',
    ),
    1126 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Yoga Philosophy',
    ),
    1127 => 
    array (
      'subject_category' => 'Skill Enhancement Course',
      'Subject' => 'Your Laws, Yours Rights',
      'credits' => '4',
    ),
    1128 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Zoology I – Food, Nutrition and Health',
      'credits' => '6',
    ),
    1129 => 
    array (
      'subject_category' => 'Generic Elective',
      'Subject' => 'Zoology II – Animal Cell Biotechnology',
      'credits' => '6',
    ),
  );
		
		foreach($arr as $ar){
		
			if($ar["subject_category"] != ""){
			
				$scChk = $this->db->get_where("tbl_subject_category",["category_name"=>$ar["subject_category"]])->num_rows();

				if($scChk == 0){
					$this->db->insert("tbl_subject_category",["category_name"=>$ar["subject_category"]]);
				}
				
			}
			
		}
		
		foreach($arr as $ar1){
			
			if($ar1["Subject"] != ""){
				
				$scChk = $this->db->get_where("tbl_subjects",["subject_name"=>$ar1["Subject"]])->num_rows();

				if($scChk == 0){
					$this->db->insert("tbl_subjects",["subject_name"=>$ar1["Subject"],"ideal_credits"=>(($ar1["credits"] != "") ? $ar1["credits"] : 0)]);
				}
				
			}
				
		}
		
		foreach($arr as $ar2){
			
			if($ar2["subject_category"] == "" || $ar2["Subject"] == ""){
				
			}else{
				
				$subcatId = $this->db->get_where("tbl_subject_category",["category_name"=>$ar2["subject_category"]])->row()->id;
				$subId = $this->db->get_where("tbl_subjects",["subject_name"=>$ar2["Subject"]])->row()->id;
				
				$this->db->insert("tbl_sub_subcat_links",["subject_category"=>$subcatId,"subject"=>$subId]);
				
			}
				
		}
		
	}

}