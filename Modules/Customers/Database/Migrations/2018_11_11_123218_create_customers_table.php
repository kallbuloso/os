<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipe')->default('0');                          // pessoa (0=Física, 1=Jurídica)
            $table->integer('status')->default('1');                        // status (0=bloqueado, 1=Ativo, 2=Inativo, 3=Ateção)
            $table->string('name');                                         // nome completo ->unique()
            $table->string('nickname')->nullable();                         // apelido
            $table->string('contact')->nullable();                          // contato
            $table->integer('gender')->default('0');                        // 0=Marculino , 1=Feminino, 2=Outros
            $table->date('birtday_at')->nullable();                         // nascimento
            $table->string('cpf_cnpj')->nullable();                         // cpf_cnpj
            $table->string('rg_insc_est')->nullable();                      // rg_insc_est
            $table->string('insc_mun')->nullable();                         // insc_municipal
            $table->string('telephone')->nullable();                        // telephone
            $table->string('cell_phone')->nullable();                       // cell_phone
            $table->boolean('whatsapp')->default('0');                      // whatsapp
            $table->string('email')->nullable();                            // email
            $table->boolean('newsletter')->default('1');                    // newsletter (aceita receber newsletter?)
            $table->string('email_nfe')->nullable();                        // email_nfe
            $table->string('site')->nullable();                             // site
            $table->string('group');                                        // grupo (consumidor, revenda, cons/atacado)
            $table->unsignedDecimal('limit_purc', 8, 2)->default('0');      // Limite de compra
            $table->string('note_purchase')->nullable();                    // Observações de cobrança
            $table->string('note')->nullable();                             // Observações
            $table->integer('attendant_id');                                // Atendente
            $table->timestamps();                                           // Timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
