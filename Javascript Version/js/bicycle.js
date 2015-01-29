var Bicycle = function() {
	Vehicle.call(this);

	Bicycle.prototype.constructor = Object.create(Vehicle.prototype);
	Bicycle.prototype.constructor = Bicycle;

	$.extend(Bicycle.prototype, {
		getDescription: function(){
			Vehicle.prototype.getDescription.call(this);
		},
		drive:function(){
			if(Bicycle.prototype.getMaxPeople(this.brojOsobaUVozilu)){
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
			if(brojLjudi <=1){
				return true;
			} else return false;
		}
	});

}