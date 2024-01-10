import pytest
from fruit import Fruit

@pytest.fixture()
def my_fruit():
    return Fruit("apple")


@pytest.fixture()
def fruit_basket_ok(my_fruit):
    return [Fruit("banana"), my_fruit]

@pytest.fixture()
def fruit_basket_failure():
    return [Fruit("banana")]

def teste_my_fruit_in_basket(my_fruit, fruit_basket_ok):
    assert my_fruit in fruit_basket_ok

def teste_my_fruit_in_basket_failure(my_fruit, fruit_basket_failure):
    assert my_fruit not in fruit_basket_failure
