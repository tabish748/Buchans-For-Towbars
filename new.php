<style>
    
/* glassgowslider обертка */
.glassgowslider {
	position: relative;
	height: 100%;
	width: 100%;
	overflow:hidden;
}

/*Окно со слайдами*/
.glassgowslider-content {
	position: relative;		
	width: 100%;
}

/*Контейнер для слайдов (передвигаем)*/
.glassgowslider-content-wrapper {
	display: flex;
	height:300px;
	transition: transform 0.5s ease-in-out;
}

/*Слайд*/
.glassgowslider-content__item {
	flex: 1 0 100%;
	width: 100%;
	height: 100%;
	background-repeat: no-repeat;
	background-position: center;
	background-size: contain;
	font-size: 100px;
	color: rgba(0,0,0,0.2);
	display: flex;
	align-items: center;
	justify-content: center;
}

.image-1 {background-color: #963484;}
.image-2 {background-color: #3066BE;}
.image-3 {background-color: #60AFFF;}
.image-4 {background-color: #28C2FF;}
.image-5 {background-color: #2AF5FF;}
.image-6 {background-color: navy;}


/* Блок с контролами */
.glassgowslider-controls {
	padding:20px;
	text-align: center;
}

/* Блок с контролами внутри окна */
.glassgowslider-content__controls {
	position:absolute;
	top:0;left:0;
	width: 100%;
	height: 100%;
	z-index:1;
	/*transform: translateY(-50%);*/
	/*padding:0 15px;*/
}

/* Arrows */
.prev-arrow, .next-arrow {
	position:absolute;
	top:50%;
	transform: translateY(-50%);
	cursor: pointer;
	color:rgba(0,0,0, 0.3);
	width: 20px;
	transition: all 0.3s;
}
.prev-arrow {left: 20px;}
.next-arrow {right: 20px;}

.prev-arrow:hover,
.next-arrow:hover {
	cursor: pointer;
	color:rgba(0,0,0, 0.7);
}

/* Dots */
.dots {
	position:absolute;
	display: flex;
	left:50%;
	transform: translateX(-50%);
	bottom:10%;
}

.dot {
	cursor: pointer;
	width: 8px;
	height: 8px;
	margin-right: 4px;
	background-color: rgba(0,0,0, 0.3);
	/*box-shadow: 0 0 5px 0px rgba(0,0,0,0.9);*/
	border-radius: 50%;
	transition:all 0.3s;
}

.dot:last-child {margin-right: 0;}
.dot:hover {background-color: #fff;}
.dot--active {background-color: rgba(255,255,255, 0.5);}

/* Buttons */
button {
	cursor: pointer;
	margin-right: 8px;
	border:none;
	border-radius: 4px;
	padding:10px;
	background-color: #3066BE;
	color:#FFF;
	transition: all 0.5s;
}
button:last-child {margin-right: 0;}
button:hover {background-color: #60AFFF;}
button:focus {outline: none;}

/* Mods */
.disabled {
	background-color: #DCCFCF;
	color:#B0A8A8;
	cursor: default;
	pointer-events:none;
}

.d-none {display: none;}
.active {opacity: 1;}
.centered {
	position:relative;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%);	
}
</style>