Carpeta de Campo – Dispenser de Maquillaje
1. Portada
•	Nombre del proyecto: Dispenser de Maquillaje Automatizado con Pago Electrónico
•	Materia / Profesor: Reichert Juan
•	Integrantes del grupo: Cesar Paloma, Mingo Martin, Baca Tobías, Aguilar Danna, Dettin Melina, Martínez Tomas 
•	Fecha:
 
2. Introducción
El presente proyecto tiene como finalidad el diseño y la construcción de un dispenser automatizado de maquillaje, controlado mediante un sistema de pago electrónico. La idea surge de la necesidad de modernizar y simplificar la forma en que se adquieren ciertos productos, tomando como referencia los kioscos automatizados y máquinas expendedoras que ya funcionan en diferentes partes del mundo.
El objetivo central es lograr que, al realizar un pago a través de una plataforma digital como Mercado Pago, el sistema valide la transacción y habilite de manera automática el mecanismo de dispensado, entregando el producto seleccionado. Este enfoque busca integrar conocimientos de electrónica, programación, diseño mecánico y medios de pago digitales, aplicados a un prototipo funcional.
Más allá de lo técnico, el proyecto apunta a fortalecer el aprendizaje práctico, fomentando el trabajo en equipo, la investigación y la capacidad de resolución de problemas. Al mismo tiempo, representa un desafío creativo, ya que combina un producto del área estética (el maquillaje) con la tecnología de la automatización, generando un resultado novedoso y atractivo.
 
3. Justificación
El proyecto del dispenser de maquillaje automatizado se justifica en varios aspectos que abarcan tanto lo educativo como lo tecnológico y lo social.
En primer lugar, desde el ámbito académico, permite a los estudiantes aplicar los conocimientos adquiridos en distintas materias: electrónica, programación, diseño mecánico, integración de software y uso de plataformas digitales de pago. No se trata solo de un ejercicio práctico, sino de un trabajo interdisciplinario que refleja cómo se combinan distintas áreas para resolver un problema real.
En segundo lugar, el proyecto tiene una fuerte relevancia tecnológica, ya que replica a menor escala el funcionamiento de sistemas comerciales utilizados a nivel global, como kioscos y máquinas expendedoras inteligentes. Esto posibilita que los alumnos se familiaricen con herramientas y conceptos que hoy en día son parte de la transformación digital en el comercio y los servicios.
Desde el punto de vista creativo y social, la elección de un dispenser de maquillaje no es casual. Se busca generar un prototipo innovador que conecte la tecnología con un área cotidiana y de interés para muchos usuarios, mostrando que la automatización puede aplicarse a productos diversos más allá de los alimentos o bebidas. Esto abre la puerta a pensar nuevas aplicaciones y modelos de negocio en sectores no tradicionales.
Finalmente, el proyecto es una experiencia formativa integral, que fomenta el trabajo en equipo, la organización, la documentación técnica y la presentación de resultados, competencias clave tanto en la vida académica como en el mundo laboral.
 
4. Objetivos
Objetivo General
•	Diseñar, desarrollar e implementar un dispenser automatizado de maquillaje que funcione mediante un sistema de pago electrónico, logrando un prototipo funcional que integre electrónica, programación y diseño mecánico.
Objetivos Específicos
1.	Investigar el funcionamiento de kioscos automatizados y máquinas expendedoras existentes en el mercado, identificando sus principales componentes y métodos de integración.
2.	Seleccionar y utilizar los materiales y componentes electrónicos adecuados (Arduino, motores, sensores, etc.) para la construcción del prototipo.
3.	Programar el sistema de control utilizando Arduino y enlazarlo con una plataforma de pago digital como Mercado Pago.
4.	Diseñar y construir una estructura física sencilla y práctica que permita el dispensado del producto.
5.	Documentar el proceso de trabajo en la carpeta de campo, incluyendo diagramas, fotografías, pruebas realizadas y soluciones a los problemas que surjan.
6.	Presentar el prototipo en funcionamiento junto con una exposición clara y visual (en Canva) que muestre la importancia y aplicabilidad del proyecto.

 

5. Investigación previa
Antes de comenzar con la construcción del prototipo, se realizó una investigación sobre distintos aspectos relacionados con el proyecto, con el fin de contar con una base teórica y técnica que sirviera de guía durante el desarrollo.
1. Máquinas expendedoras y kioscos automatizados
Se analizaron ejemplos de máquinas expendedoras tradicionales y modernas en distintos países. Se observó que la mayoría de estos sistemas funcionan mediante la activación de motores eléctricos o mecanismos mecánicos que liberan el producto una vez validada la compra. Las versiones más recientes incorporan pantallas táctiles, sensores de seguridad y sistemas de pago digitales.
2. Pagos electrónicos y su integración
Se investigaron métodos de pago digital disponibles en Argentina y a nivel global, con especial foco en Mercado Pago por su accesibilidad. Se revisó la documentación de la API, que permite validar transacciones en tiempo real y activar un sistema externo (en este caso, Arduino) para habilitar la entrega del producto. También se tuvo en cuenta la importancia de la seguridad digital y la confiabilidad en la acreditación del pago.
3. Electrónica aplicada al control del dispensado
Se revisaron recursos y tutoriales sobre el uso de Arduino para controlar motores (servomotores y motores DC). Se identificó la necesidad de utilizar elementos adicionales como relés, fuentes de alimentación externas o drivers de motor para asegurar la potencia suficiente. Además, se investigó sobre el uso de LEDs indicadores para informar al usuario si el pago fue aceptado o rechazado.
4. Experiencias similares en proyectos escolares y de makers
Finalmente, se buscaron referencias de proyectos de estudiantes y makers que ya habían trabajado con máquinas expendedoras caseras. Estos aportaron ideas sobre cómo armar la estructura física (cartón, madera, impresora 3D) y cómo documentar el proceso paso a paso con fotos, esquemas y diagramas.
En conclusión, la investigación permitió identificar las tecnologías clave necesarias para el desarrollo del dispenser: sistema de pago electrónico confiable, control mediante Arduino, motor de dispensado y estructura física adaptada al producto.
 

6. Lista de materiales y herramientas
Hardware:  probablemente
•	Arduino UNO 
•	Protoboard
•	Cables dupont
•	Servomotor o motor DC (para el mecanismo de dispensado)
•	Relé o transistor de control
•	Fuente de alimentación (5V o 12V según motor)
•	Botones, LEDs y resistencias
•	Estructura física (caja, ranura para el producto, soportes)
Software:
•	Arduino IDE
•	Integración con API de Mercado Pago
Herramientas:
•	Soldador y estaño
•	Alicates y destornilladores
•	Impresora 3D o cartón/madera para estructura (según materiales disponibles)
 
7. Diagramas
(dejamos espacio para agregar después)
•	Diagrama eléctrico de conexiones.
•	Esquema de cómo va montado el motor y la salida del producto.
•	Flujo del sistema (pago validado → señal a Arduino → activación motor → entrega producto).
 
8. Proceso de construcción
(ir agregando paso a paso con fotos)
1.	Armado del circuito básico en protoboard.
2.	Programación inicial de Arduino para mover el motor.
3.	Pruebas del mecanismo de dispensado.
4.	Integración con sistema de pago (validación en PC o servidor).
5.	Montaje en la caja/estructura.
 
9. Registro de problemas y soluciones
Ejemplo:
•	Problema: el motor no tenía fuerza suficiente.
o	Solución: se reemplazó por un motor más grande y se ajustó el código.
•	Problema: retraso en la validación del pago.
o	Solución: optimización de la comunicación con la API.
 
10. Resultados esperados
•	Prototipo que acepte un pago digital.
•	Activación automática del dispensador.
•	Señal visual (LED verde/rojo) indicando éxito o error.
 
11. Conclusiones (para el final)
•	Qué se aprendió.
•	Qué funcionó y qué se puede mejorar.
