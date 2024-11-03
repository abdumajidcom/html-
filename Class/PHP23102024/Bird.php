<?php

namespace Class\PHP23102024;

class Bird implements BirdInterface
{
    private int $id;
    protected string $slug;
    public string $name;
    public string $type;

    public function __construct($name, $type)
    {
        $this->id = time();
        $this->slug = md5(time());
        $this->name = $name; 
        $this->type = $type;
    }

    /**
     * Display data
     * @return string
     */
    public function display(): string
    {
        return 'name: ' . $this->name .
            ', type: ' . $this->type .
            ', id: ' . $this->id .
            ', slug: ' . $this->slug;
    }
}