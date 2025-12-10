<?php

/**
 * -WIP.
 */

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
=======
>>>>>>> 551c768c4 (.)
use Filament\Forms\Components\Field;
use Filament\Schemas\Components\Component;
use Illuminate\Support\Arr;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\GetTransKeyAction;
use ReflectionClass;
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
=======
>>>>>>> 9db27d12 (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 399f46d3 (.)
=======
>>>>>>> ca9324a4 (.)
=======
>>>>>>> 17684f52 (.)
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
=======
=======
>>>>>>> 9db27d12 (.)
>>>>>>> 091f883c (.)
use Filament\Schemas\Components\Component;
use ReflectionClass;
use Filament\Forms\Components\Field;
use Illuminate\Support\Arr;
use Modules\Lang\Actions\SaveTransAction;
use Modules\Xot\Actions\GetTransKeyAction;
=======
>>>>>>> 551c768c4 (.)
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

/**
 * Classe per automatizzare l'assegnazione di etichette ai componenti Filament.
 */
class AutoLabelAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
     * Get the component name based on its actual type.
     *
     * @param Field|Component $component Il componente di cui ottenere il nome
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> ce6fc085 (.)
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Field|Component $component Il componente di cui ottenere il nome
=======
<<<<<<< HEAD
=======
     * @param Field|\Filament\Schemas\Components\Component $component Il componente di cui ottenere il nome
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
     * @param Field|Component $component Il componente di cui ottenere il nome
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
     * @param Field|\Filament\Schemas\Components\Component $component Il componente di cui ottenere il nome
>>>>>>> a12f125f4a (.)
=======
     * @param Field|Component $component Il componente di cui ottenere il nome
>>>>>>> b93ef594b4 (.)
=======
     * @param Field|Component $component Il componente di cui ottenere il nome
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
     * @return string Il nome del componente
     */
    private function getComponentName(Field|Component $component): string
    {
        // Per i componenti Field di Filament
        if (method_exists($component, 'getName')) {
            $name = $component->getName();
            return is_string($name) ? $name : ((string) $name);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            return is_string($name) ? $name : (string) $name;
=======
=======
            return is_string($name) ? $name : (string) $name;
>>>>>>> f1d4085 (.)
<<<<<<< HEAD
>>>>>>> 2f3197ab (.)
=======
=======
            return is_string($name) ? $name : ((string) $name);
>>>>>>> 73eab74 (.)
>>>>>>> 218dfed3 (.)
=======
>>>>>>> a67e542f (.)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            return is_string($name) ? $name : ((string) $name);
=======
            return is_string($name) ? $name : (string) $name;
>>>>>>> a12f125f4a (.)
=======
            return is_string($name) ? $name : ((string) $name);
>>>>>>> b93ef594b4 (.)
=======
            return is_string($name) ? $name : (string) $name;
>>>>>>> origin/develop
>>>>>>> 6cba4fe (.)
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
        }

        // Per i componenti generali di Filament
        // PHPStan rileva che questo controllo è sempre vero per Component
        // ma lo manteniamo per chiarezza e per gestire eventuali cambiamenti futuri in Filament
        // @phpstan-ignore function.alreadyNarrowedType
        if (method_exists($component, 'getStatePath')) {
            $statePath = $component->getStatePath();
            return $statePath ?? class_basename($component);
        }

        // Fallback a reflection per altri casi
        $reflectionClass = new ReflectionClass($component);
        if ($reflectionClass->hasProperty('name') && $reflectionClass->getProperty('name')->isPublic()) {
            $property = $reflectionClass->getProperty('name');
            Assert::string($value = $property->getValue($component));
            return $value;
        }

        // Ultima risorsa: ritorniamo il nome della classe
        return class_basename($component);
    }

    /**
     * Applica automaticamente le etichette ai componenti Filament.
     *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 218dfed3 (.)
<<<<<<< HEAD
=======
>>>>>>> a67e542f (.)
=======
>>>>>>> ce6fc085 (.)
=======
>>>>>>> 091f883c (.)
     * @param Field|Component $component Il componente a cui applicare l'etichetta
     *
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
>>>>>>> 2f3197ab (.)
=======
     * Applica automaticamente le etichette ai componenti Filament.
     *
     * @param  Field|Component  $component  Il componente a cui applicare l'etichetta
>>>>>>> 551c768c4 (.)
     * @return Field|Component Il componente con l'etichetta applicata
     */
    public function execute(Field|Component $component): Field|Component
    {
        Assert::isInstanceOf($component, Field::class, 'Il componente deve essere un\'istanza di Field o Component');
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 6);

        // Otteniamo il valore dalla backtrace
        $class = Arr::get($backtrace, '5.class');

        // Gestiamo il caso in cui $class sia vuoto
        if (empty($class)) {
            // Se non riusciamo a ottenere la classe dal backtrace, usiamo la classe del componente
            $class = $component::class;
        }

        if (is_object($class)) {
            $class = $class::class;
<<<<<<< HEAD
            $class = get_class($component);
        }

        if (is_object($class)) {
            $class = get_class($class);
=======
>>>>>>> 551c768c4 (.)
        }

        // Assicuriamo che $class sia una stringa
        Assert::stringNotEmpty($class, 'La classe deve essere una stringa non vuota');

        // Otteniamo la chiave di traduzione
        $transKeyAction = app(GetTransKeyAction::class);
        Assert::isCallable([$transKeyAction, 'execute'], 'GetTransKeyAction::execute deve essere chiamabile');

        $trans_key = $transKeyAction->execute($class);
        Assert::stringNotEmpty($trans_key, 'La chiave di traduzione non può essere vuota');

        // Otteniamo il nome del componente
        $componentName = $this->getComponentName($component);
        Assert::stringNotEmpty($componentName, 'Il nome del componente non può essere vuoto');

        // Costruiamo la chiave per l'etichetta
<<<<<<< HEAD
        $label_key = $trans_key . '.fields.' . $componentName . '.label';
        $label_key = $trans_key . '.fields.' . $componentName . '.label';
        $label_key = $trans_key . '.fields.' . $componentName . '.label';
=======
        $label_key = $trans_key.'.fields.'.$componentName.'.label';
>>>>>>> 551c768c4 (.)
        $label = trans($label_key);

        if (is_string($label)) {
            if ($label_key === $label) {
                // Se la traduzione non esiste, creiamone una utilizzando il nome del componente
                $label_value = $componentName;

                // Proviamo a ottenere una traduzione più breve
<<<<<<< HEAD
                $label_key1 = $trans_key . '.fields.' . $componentName;
                $label_key1 = $trans_key . '.fields.' . $componentName;
                $label_key1 = $trans_key . '.fields.' . $componentName;
=======
                $label_key1 = $trans_key.'.fields.'.$componentName;
>>>>>>> 551c768c4 (.)
                $label1 = trans($label_key1);

                if ($label_key1 !== $label1 && is_string($label1)) {
                    $label_value = $label1;
                }

                // Salviamo la traduzione
                $saveTransAction = app(SaveTransAction::class);
                Assert::isCallable([$saveTransAction, 'execute'], 'SaveTransAction::execute deve essere chiamabile');

                $saveTransAction->execute($label_key, $label_value);
            }

            // Applichiamo l'etichetta al componente
            // Field ha sempre un metodo label(), quindi possiamo chiamarlo direttamente
            $component->label($label);
        }

        return $component;
    }

    /**
     * Get the component name based on its actual type.
     *
<<<<<<< HEAD
     * @param  Field|Component  $component  Il componente di cui ottenere il nome
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @param  Field|Component  $component  Il componente di cui ottenere il nome
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 5cf46378 (.)
     * @param Field|Component $component Il componente di cui ottenere il nome
=======
     * @param Field|\Filament\Schemas\Components\Component $component Il componente di cui ottenere il nome
>>>>>>> f1d4085 (.)
=======
     * @param Field|Component $component Il componente di cui ottenere il nome
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
     * @param Field|Component $component Il componente di cui ottenere il nome
>>>>>>> 300ef70 (.)
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
     * @return string Il nome del componente
     */
    private function getComponentName(Field|Component $component): string
    {
        // Per i componenti Field di Filament
        if (method_exists($component, 'getName')) {
            $name = $component->getName();
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)

            return is_string($name) ? $name : ((string) $name);
=======
<<<<<<< HEAD
<<<<<<< HEAD
            return is_string($name) ? $name : ((string) $name);
=======
            return is_string($name) ? $name : (string) $name;
>>>>>>> f1d4085 (.)
=======
            return is_string($name) ? $name : ((string) $name);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
            return is_string($name) ? $name : ((string) $name);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
        }

        // Per i componenti generali di Filament
        // PHPStan rileva che questo controllo è sempre vero per Component
        // ma lo manteniamo per chiarezza e per gestire eventuali cambiamenti futuri in Filament
        // @phpstan-ignore function.alreadyNarrowedType
        if (method_exists($component, 'getStatePath')) {
            $statePath = $component->getStatePath();
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)

            return $statePath ?? class_basename($component);
=======
<<<<<<< HEAD
<<<<<<< HEAD
            return $statePath ?? class_basename($component);
=======
            return $statePath;
>>>>>>> f1d4085 (.)
=======
            return $statePath ?? class_basename($component);
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
=======
=======
            return $statePath ?? class_basename($component);
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
        }

        // Fallback a reflection per altri casi
        $reflectionClass = new ReflectionClass($component);
        if ($reflectionClass->hasProperty('name') && $reflectionClass->getProperty('name')->isPublic()) {
            $property = $reflectionClass->getProperty('name');
            Assert::string($value = $property->getValue($component));

            return $value;
        }

        // Ultima risorsa: ritorniamo il nome della classe
        return class_basename($component);
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 5a14301c (.)
=======
>>>>>>> 7468a7d2 (.)

    /**
     * Applica automaticamente le etichette ai componenti Filament.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Field|Component  $component  Il componente a cui applicare l'etichetta
     * @return Field|Component Il componente con l'etichetta applicata
     * @param Field|Component $component Il componente a cui applicare l'etichetta
     *
     * @return Field|Component Il componente con l'etichetta applicata
     * @param Field|Component $component Il componente a cui applicare l'etichetta
     * 
     * @return Field|Component Il componente con l'etichetta applicata
=======
<<<<<<< HEAD
     * @param  Field|Component  $component  Il componente a cui applicare l'etichetta
     * @return Field|Component Il componente con l'etichetta applicata
=======
     * @param  Field|Component  $component  Il componente a cui applicare l'etichetta
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  Field|Component  $component  Il componente a cui applicare l'etichetta
     * @return Field|Component Il componente con l'etichetta applicata
>>>>>>> 5cf46378 (.)
=======
<<<<<<< HEAD
<<<<<<< HEAD
     * @param Field|Component $component Il componente a cui applicare l'etichetta
     *
<<<<<<< HEAD
=======
>>>>>>> a6ef6dc7 (.)
>>>>>>> 5cf46378 (.)
     * @return Field|Component Il componente con l'etichetta applicata
=======
     * @param Field|\Filament\Schemas\Components\Component $component Il componente a cui applicare l'etichetta
     *
     * @return Field|\Filament\Schemas\Components\Component Il componente con l'etichetta applicata
>>>>>>> f1d4085 (.)
=======
     * @param Field|Component $component Il componente a cui applicare l'etichetta
     *
     * @return Field|Component Il componente con l'etichetta applicata
>>>>>>> 73eab74 (.)
>>>>>>> d2b0a27 (.)
<<<<<<< HEAD
>>>>>>> 7468a7d2 (.)
=======
=======
     * @param Field|Component $component Il componente a cui applicare l'etichetta
     *
     * @return Field|Component Il componente con l'etichetta applicata
>>>>>>> 300ef70 (.)
>>>>>>> 5cf46378 (.)
     */
    public function execute(Field|Component $component): Field|Component
    {
        Assert::isInstanceOf($component, Field::class, 'Il componente deve essere un\'istanza di Field o Component');
        $backtrace = debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 6);

        // Otteniamo il valore dalla backtrace
        $class = Arr::get($backtrace, '5.class');

        // Gestiamo il caso in cui $class sia vuoto
        if (empty($class)) {
            // Se non riusciamo a ottenere la classe dal backtrace, usiamo la classe del componente
            $class = get_class($component);
        }

        if (is_object($class)) {
            $class = get_class($class);
        }

        // Assicuriamo che $class sia una stringa
        Assert::stringNotEmpty($class, 'La classe deve essere una stringa non vuota');

        // Otteniamo la chiave di traduzione
        $transKeyAction = app(GetTransKeyAction::class);
        Assert::isCallable([$transKeyAction, 'execute'], 'GetTransKeyAction::execute deve essere chiamabile');

        $trans_key = $transKeyAction->execute($class);
        Assert::stringNotEmpty($trans_key, 'La chiave di traduzione non può essere vuota');

        // Otteniamo il nome del componente
        $componentName = $this->getComponentName($component);
        Assert::stringNotEmpty($componentName, 'Il nome del componente non può essere vuoto');

        // Costruiamo la chiave per l'etichetta
<<<<<<< HEAD
        $label_key = $trans_key . '.fields.' . $componentName . '.label';
=======
        $label_key = $trans_key.'.fields.'.$componentName.'.label';
>>>>>>> 7468a7d2 (.)
        $label = trans($label_key);

        if (is_string($label)) {
            if ($label_key === $label) {
                // Se la traduzione non esiste, creiamone una utilizzando il nome del componente
                $label_value = $componentName;

                // Proviamo a ottenere una traduzione più breve
<<<<<<< HEAD
                $label_key1 = $trans_key . '.fields.' . $componentName;
=======
                $label_key1 = $trans_key.'.fields.'.$componentName;
>>>>>>> 7468a7d2 (.)
                $label1 = trans($label_key1);

                if ($label_key1 !== $label1 && is_string($label1)) {
                    $label_value = $label1;
                }

                // Salviamo la traduzione
                $saveTransAction = app(SaveTransAction::class);
                Assert::isCallable([$saveTransAction, 'execute'], 'SaveTransAction::execute deve essere chiamabile');

                $saveTransAction->execute($label_key, $label_value);
            }

            // Applichiamo l'etichetta al componente
            // Field ha sempre un metodo label(), quindi possiamo chiamarlo direttamente
            $component->label($label);
        }

        return $component;
    }
<<<<<<< HEAD
=======
>>>>>>> ab8cc3f3 (.)
>>>>>>> 7468a7d2 (.)
=======
>>>>>>> 551c768c4 (.)
}
