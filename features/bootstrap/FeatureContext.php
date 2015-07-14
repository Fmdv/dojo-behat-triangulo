<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

require "/home/fernanda/workspace/behat/vendor/phpunit/phpunit/src/Framework/Assert/Functions.php";
require "/home/fernanda/workspace/behat/CalculoTriangulo.php";

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    protected $calculo;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given que eu estou na pagina de calculo de triangulos
     */
    public function queEuEstouNaPaginaDeCalculoDeTriangulos()
    {
        $this->calculo = new CalculoTriangulo();
    }

    /**
     * @When eu informo que o lado1 eh :arg1
     */
    public function euInformoQueOLadoEh($lado1)
    {
        $this->calculo->lado1 = $lado1;
    }

    /**
     * @When eu informo que o lado2 eh :arg1
     */
    public function euInformoQueOLadoEh2($lado2)
    {
        $this->calculo->lado2 = $lado2;
    }

    /**
     * @When eu informo que o lado3 eh :arg1
     */
    public function euInformoQueOLadoEh3($lado3)
    {
        $this->calculo->lado3 = $lado3;
    }

   /**
     * @When eu informo os lados do triangulo
     */
    public function euInformoOsLadosDoTriangulo(TableNode $table)
    {
        // foreach ($table as $triangulo) {
        //      $this->calculo->lado1 = $table->getCollum();
        //      $this->calculo->lado2 = $table->getRow();
        //      $this->calculo->lado3 = $table->getRow();
        // }
    }

   /**
     * @When eu informo o :arg1, :arg2 e :arg3 do triangulo
     */
    public function euInformoOEDoTriangulo($arg1, $arg2, $arg3)
    {
        $this->calculo->lado1 = $arg1;
        $this->calculo->lado2 = $arg2;
        $this->calculo->lado3 = $arg3;
    }


    /**
     * @Then exibe mensagem triangulo :arg1
     */
    public function exibeMensagemTriangulo($triangulo)
    {
        assertEquals($triangulo, $this->calculo->verificaTriangulo());
    }

    /**
     * @Then exibe mensagem trianguloResultado ":arg1"
     */
    public function exibeMensagemTrianguloresultado($arg1)
    {
        assertEquals($arg1, $this->calculo->verificaTriangulo());     
    }


}
