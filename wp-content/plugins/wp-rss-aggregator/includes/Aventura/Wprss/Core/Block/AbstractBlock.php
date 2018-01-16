<?php

namespace Aventura\Wprss\Core\Block;

use Aventura\Wprss\Core;

/**
 * Basic functionality for all blocks.
 *
 * @since 4.9
 */
abstract class AbstractBlock extends Core\Model\ModelAbstract implements BlockInterface
{
    /**
     * {@inheritdoc}
     *
     * @since 4.9
     */
    public function __toString()
    {
        try {
            $output = $this->getOutput();
        } catch (\Exception $ex) {
            $output = __(sprintf('Casting of block to string resulted in exception "%1$s" with message:' . "\n" . '%2$s', get_class($ex), $ex->getMessage()));
            if (WPRSS_DEBUG) {
                $output .= "\n" . $ex->getTraceAsString();
            }
        }

        return $output;
    }

    /**
     * A more structured way of retrieving this block's output.
     *
     * @since 4.9
     *
     * @return string Output generated by this block.
     */
    abstract public function getOutput();
}