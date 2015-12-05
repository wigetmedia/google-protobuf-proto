<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : plugin.proto
 */


namespace google\protobuf\compiler\CodeGeneratorResponse;

/**
 * Protobuf message : google.protobuf.compiler.CodeGeneratorResponse.File
 *
 * @\Protobuf\Annotation\Descriptor(
 *   name="File",
 *   package="google.protobuf.compiler.CodeGeneratorResponse",
 *   fields={
 *     @\Protobuf\Annotation\Field(
 *       name="name",
 *       tag=1,
 *       type=9,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="insertion_point",
 *       tag=2,
 *       type=9,
 *       label=1
 *     ),
 *     @\Protobuf\Annotation\Field(
 *       name="content",
 *       tag=15,
 *       type=9,
 *       label=1
 *     )
 *   },
 *   extensions={
 *   }
 * )
 */
class File extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * name optional string = 1
     *
     * @var string
     */
    protected $name = null;

    /**
     * insertion_point optional string = 2
     *
     * @var string
     */
    protected $insertion_point = null;

    /**
     * content optional string = 15
     *
     * @var string
     */
    protected $content = null;

    /**
     * Check if 'name' has a value
     *
     * @return bool
     */
    public function hasName()
    {
        return $this->name !== null;
    }

    /**
     * Get 'name' value
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set 'name' value
     *
     * @param string $value
     */
    public function setName($value)
    {
        return $this->name = $value;
    }

    /**
     * Check if 'insertion_point' has a value
     *
     * @return bool
     */
    public function hasInsertionPoint()
    {
        return $this->insertion_point !== null;
    }

    /**
     * Get 'insertion_point' value
     *
     * @return string
     */
    public function getInsertionPoint()
    {
        return $this->insertion_point;
    }

    /**
     * Set 'insertion_point' value
     *
     * @param string $value
     */
    public function setInsertionPoint($value)
    {
        return $this->insertion_point = $value;
    }

    /**
     * Check if 'content' has a value
     *
     * @return bool
     */
    public function hasContent()
    {
        return $this->content !== null;
    }

    /**
     * Get 'content' value
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set 'content' value
     *
     * @param string $value
     */
    public function setContent($value)
    {
        return $this->content = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->name);
        }

        if ($this->insertion_point !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->insertion_point);
        }

        if ($this->content !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->content);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->name = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->insertion_point = $reader->readString($stream);

                continue;
            }

            if ($tag === 15) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->content = $reader->readString($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->put($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->name !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->name);
        }

        if ($this->insertion_point !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->insertion_point);
        }

        if ($this->content !== null) {
            $writer->writeVarint($stream, 122);
            $writer->writeString($stream, $this->content);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createReadContext($stream);
        $message = new self();

        $message->readFrom($context);

        return $message;
    }


}

