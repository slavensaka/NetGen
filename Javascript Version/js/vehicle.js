var Vehicle = function() {
	this.brojOsobaUVozilu=0;
	this.driving = false;
	/* 
	   Vehicle constructor
	   ========================================================================== */
	this.constructor = function(broj){
		Math.abs(broj);
		 this.brojOsobaUVozilu=broj;
		 // console.log(this.brojOsobaUVozilu);
	}

	$.extend(Vehicle.prototype, {
		getDescription: function(){
			
			if(Car.prototype.isPrototypeOf(this)){
				
				document.write('Wheeled, self-powered motor vehicle used for transportation<br/>');
			} 
			if(Bicycle.prototype.isPrototypeOf(this)){
				 document.write('Human-powered, pedal-driven, single-track vehicle<br/>');
			} 
		},
		addPerson:function(){
				if(!this.driving) {
    	 this.brojOsobaUVozilu=(this.brojOsobaUVozilu)+1;
    	 document.write('Person added!<br/>');
    	} else document.write('Cannot add person, vehicle is driving!<br/>');	
    	
		},
		removePerson:function(){
	   if(!this.driving){
        if(this.brojOsobaUVozilu === parseInt(0)){
            document.write('Cannot remove person, vehicle is empty!<br/>');
        
    	} else {
          this.brojOsobaUVozilu=(this.brojOsobaUVozilu)-1;
           document.write('Person removed!<br/>');
      
        }
       } else document.write('Cannot remove person, vehicle is driving!<br/>');	

		},
		drive:function(){
		if(!(parseInt(this.brojOsobaUVozilu)=== parseInt(0))){
    		this.driving = true;	
    		document.write('Vehicle started!<br/>');
    	} else {
    		document.write('Cannot start vehicle, vehicle is empty!<br/>');   		
    	  }
		},
		stop:function(){
			 this.driving=false;
 		     document.write('Vehicle stopped!<br/>');
		}
	});


	
	
}