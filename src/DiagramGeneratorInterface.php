<?php declare(strict_types=1);

namespace Jawira\DoctrineDiagramContracts;

interface DiagramGeneratorInterface
{
  /**
   * Generate diagram in PlantUml format.
   *
   * @param \Jawira\DoctrineDiagramContracts\Size         $size    Diagram size.
   * @param string|\Jawira\DoctrineDiagramContracts\Theme $theme   Diagram theme. String is accepted to allow to use newer themes.
   * @param string[]                                      $include List of elements to include to the diagram.
   * @param string[]                                      $exclude List of elements to exclude from the diagram.
   * @return string PlantUml diagram.
   */
  public function generatePuml(Size $size, string|Theme $theme, array $include, array $exclude): string;
}
