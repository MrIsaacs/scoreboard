<?php
/**
 * Created by PhpStorm.
 * User: Davor Ilic
 * Date: 19.06.2018
 * Time: 23:29
 */
namespace App\Model\Dto\Graph;

use Illuminate\Database\Eloquent\Model;

class GraphCreateCommand extends Model
{
    protected $fillable = [
        'subject',
        'predicate',
        'object',
        'language',
        'datatype',
        'graph',
    ];

    /**
     * @var string $subject
     */
    protected $subject;
    /**
     * @var string $predicate
     */
    protected $predicate;
    /**
     * @var string $object
     */
    protected $object;
    /**
     * @var string $language
     */
    protected $language;
    /**
     * @var string $datatype
     */
    protected $datatype;
    /**
     * @var string $graph
     */
    protected $graph;


    /**
     * CharacterCreateCommand constructor.
     */
    public function __construct() {}

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }
    /**
     * @param string $subject
     */
    public function setSubject(string $subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getPredicate(): string
    {
        return $this->predicate;
    }
    /**
     * @param string $predicate
     */
    public function setPredicate(string $predicate)
    {
        $this->predicate = $predicate;
    }

    /**
     * @return string
     */
     public function getObject(): string
     {
         return $this->object;
     }
     /**
      * @param string $object
      */
     public function setObject(string $object)
     {
         $this->object = $object;
     }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
    /**
     * @param string $language
     */
    public function setLanguage(string $language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getDatatype(): string
    {
        return $this->datatype;
    }
    /**
     * @param string $datatype
     */
    public function setDatatype(string $datatype)
    {
        $this->language = $datatype;
    }

    /**
     * @return string
     */
    public function getGraph(): string
    {
        return $this->graph;
    }
    /**
     * @param string $graph
     */
    public function setGraph(string $graph)
    {
        $this->graph = $graph;
    }
}
