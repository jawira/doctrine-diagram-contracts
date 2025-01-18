<?php declare(strict_types=1);

namespace Jawira\DoctrineDiagramContracts;

interface DiagramGeneratorInterface
{
    /**
     * Generate diagram in PlantUml format.
     *
     * @param string|Size $size Diagram size.
     * @param string|Theme $theme Diagram theme.
     * @param string[] $exclude List of elements to exclude from diagram.
     * @return string PlantUml diagram.
     */
    public function generateDiagram(string|Size $size, string|Theme $theme, array $exclude): string;
}
