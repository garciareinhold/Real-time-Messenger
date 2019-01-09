<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    //Aca modifico lo que traigo de la bbdd para no tener que hacerlo desde el controller,
    //en este caso voy a agregar el nombre del contacto en la conversacion
    protected $appends = ['contact_name'];


//El accesor de contact_name añade atributos a la serializacion del json, en este caso trae el nombre 
    public function getContactNameAttribute()
   {
     return $this->contact()->first(['name'])->name;
   }
   public function contact()
   {	// Conversation N   1 User (contact)
     return $this->belongsTo(User::class);
   }

}
