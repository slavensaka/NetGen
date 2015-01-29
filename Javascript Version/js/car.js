var Car = function() {
	Vehicle.call(this);

	Car.prototype.constructor = Object.create(Vehicle.prototype);
	Car.prototype.constructor = Car;

	$.extend(Car.prototype, {
		getDescription: function(){
			Vehicle.prototype.getDescription.call(this);
		},
		drive:function(){
			if(Car.prototype.getMaxPeople(this.brojOsobaUVozilu)){
				Vehicle.prototype.drive.call(this);
			} else document.write('Cannot start vehicle, too many people!<br/>');
		},
		addPerson:function(){
			Vehicle.prototype.addPerson.call(this);
		},
		stop:function(){
			Vehicle.prototype.stop.call(this);			
		},
		removePerson:function(){
			Vehicle.prototype.removePerson.call(this);
		},
		getMaxPeople:function(brojLjudi){
			parseInt(brojLjudi);
			if(brojLjudi <=5){
				return true;
			} else return false;
		}
	});

}