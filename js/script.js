
var  enjoyhint = new EnjoyHint({
	
	onStart:function() {
		////
	},
	onEnd:function() {
		////
	},
	onScipt:function() {
		////
	}
	
});

var array_enjoy = [

	{
		'click .new_btn0':'Добро пожаловать на сайт РСВ, ведущий сайт по развитию карьерного роста.',
		//timeout:5000,
		//shape:'circle',
		//radius:100
		//margin:50,
		//scrollAnimationSpeed:3000,
		
		nextButton:{
			className:'myClass',
			text:'Далее'
		},
		skipButton:{
			className:'myClass',
			text:'Пропустить'
		},
		
		showSkip:true,
		showNext:true
		
		
	},

	{
		'click .new_btn':'Тут вы можете принять участие в конкурсах и мероприятиях, а также создать свой собственный проект. ',
		//timeout:5000,
		//shape:'circle',
		//radius:100
		//margin:50,
		//scrollAnimationSpeed:3000,
		
		nextButton:{
			className:'myClass',
			text:'Далее'
		},
		skipButton:{
			className:'myClass',
			text:'Пропустить'
		},
		
		showSkip:true,
		showNext:true
		
		
	},
	
	{
		selector:'.new_btn2',
		nextButton:{
			className:'myClass',
			text:'Далее'
		},
		skipButton:{
			className:'myClass',
			text:'Пропустить'
		},
		description:'Тут у вас есть возможность приобрести и улучшить свои профессиональные навыки. ',
		showNext:true,
	
		
	},

	{
		selector:'.new_btn3',
		nextButton:{
			className:'myClass',
			text:'Далее'
		},
		skipButton:{
			className:'myClass',
			text:'Пропустить'
		},
		description:'В какой сфере вас ждет успех? Какие навыки вас для этого понадобиться и как их получить? За ответами сюда!',
		showNext:true,
	
		
	},
	
	{
		'click .new_btn4':'Если понадобиться помощь, обращайтесь.',
		skipButton:{
			className:'myClass',
			text:'Пропустить'
		},
	}

];

enjoyhint.set(array_enjoy);
enjoyhint.run();
