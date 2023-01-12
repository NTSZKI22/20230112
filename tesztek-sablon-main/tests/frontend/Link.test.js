import renderer from 'react-test-renderer';
import Link from '../../resources/js/components/Link';

it('change class when hovered', () => {
    const component = renderer.create(
        <Link>Google</Link>
    );
    let tree = component.toJSON();
    expect(tree).toMatchSnapshot();

    renderer.act(() => {
        tree.props.onMouseEnter();
    })

    tree = component.toJSON();
    expect(tree).toMatchSnapshot();

    renderer.act(() => {
        tree.props.onMouseLeave();
    })

    tree = component.toJSON();
    expect(tree).toMatchSnapshot();
})
