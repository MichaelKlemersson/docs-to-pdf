<?php

namespace DocsToPdf\Contracts;

/**
 * Interface FileConverter
 * @author Michael Klemersson
 */
interface FileConverter
{
    /**
     * Convert the given file into the given type
     * 
     * @param string $file
     * @param int type
     */
    public function convert(string $file, int $type);
}
