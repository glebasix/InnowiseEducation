<?php

namespace src;

class Task12
{
    private int $first;
    private int $second;
    public float $result;

    /**
     * @param int $first
     * @param int $second
     */
    public function __construct(int $first, int $second)
    {
        $this->first = $first;
        $this->second = $second;
    }

    /**
     * @return $this
     */
    public function add(): self
    {
        $this->result = $this->first + $this->second;

        return $this;
    }

    /**
     * @return $this
     */
    public function substruct(): self
    {
        $this->result = $this->first - $this->second;

        return $this;
    }

    /**
     * @return $this
     */
    public function multiply(): self
    {
        $this->result = $this->first * $this->second;

        return $this;
    }

    /**
     * @return $this
     */
    public function divide(): self
    {
        if ($this->second == 0) {
            return throw new \InvalidArgumentException();
        }
        $this->result = $this->first / $this->second;

        return $this;
    }

    /**
     * @param int $number
     *
     * @return $this
     */
    public function addBy(int $number): self
    {
        $this->result += $number;

        return $this;
    }

    /**
     * @param int $number
     *
     * @return $this
     */
    public function substructBy(int $number): self
    {
        $this->result -= $number;

        return $this;
    }

    /**
     * @param int $number
     *
     * @return $this
     */
    public function multiplyBy(int $number): self
    {
        $this->result *= $number;

        return $this;
    }

    /**
     * @param int $number
     *
     * @return $this
     */
    public function divideBy(int $number): self
    {
        if ($number == 0) {
            return throw new \InvalidArgumentException();
        }
        $this->result /= $number;

        return $this;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->result;
    }
}
